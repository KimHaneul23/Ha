/*
	WinWheel Library, by Douglas McKechie @ www.dougtesting.net
	See website for documentation, examples, updates, etc.
    
	Version: 2.0 Alpha 2015-04-24
    
    LICENSE:	
    The code is open source and you are allowed to modify and use it however you wish.
        
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    Enjoy :)
*/

// ====================================================================================================================
// The constructor for the WinWheel object, a JOSN-like array of options can be passed in.
// By default the wheel is drawn if canvas object exists on the page, but can pass false as second parameter if don't want this to happen.
// ====================================================================================================================
function Winwheel(options, drawWheel)
{
	defaultOptions = {
		'canvasId'		   : 'canvas',		// Id of the canvas which the wheel is to draw on to.
		'centerX'		   : null,			// X position of the center of the wheel. The default of these are null which means will be placed in center of the canvas.
		'centerY'		   : null,			// Y position of the wheel center. If left null at time of construct the center of the canvas is used.
		'outerRadius'	   : null,			// The radius of the outside of the wheel. If left null it will be set to the radius from the center of the canvas to its shortest side.
		'innerRadius'	   : 0,			    // Normally 0. Allows the creation of rings / doughnuts if set to value > 0. Should not exceed outer radius.
		'numSegments'	   : 1,			    // The number of segments. Need at least one to draw.
		'drawMode'		   : 'code',		// The draw mode. Possible values are 'code' and 'image'. Default is code which means segments are drawn using canvas arc() function.
		'rotationAngle'	   : 0,			    // The angle of rotation of the wheel - 0 is 12 o'clock position.
		'textFontFamily'   : 'Arial',		// Segment text font, you should use web safe fonts.
		'textFontSize'	   : 20,			// Size of the segment text.
		'textFontWeight'   : 'bold',		// Font weight.
		'textOrientation'  : 'horizontal',	// Either horizontal, vertical, or curved.
		'textAlignment'    : 'center',		// Either center, inner, or outer.
		'textDirection'    : 'normal', 	    // Either normal or reversed. In normal mode for horizontal text in segment at 3 o'clock is correct way up, in reversed text at 9 o'clock segment is correct way up.
		'textMargin'	   : null,			// Margin between the inner or outer of the wheel (depends on textAlignment).
		'textFillStyle'    : 'black',		// This is basically the text colour.
		'textStrokeStyle'  : null,			// Basically the line colour for segment text, only looks good for large text so off by default.
		'textLineWidth'    : 1,			    // Width of the lines around the text. Even though this defaults to 1, a line is only drawn if textStrokeStyle specified.
		'fillStyle'	       : 'silver',		// The segment background colour.
		'strokeStyle'      : 'black',		// Segment line colour. Again segment lines only drawn if this is specified.
		'lineWidth'	       : 1,				// Width of lines around segments.
        'clearTheCanvas'   : true,          // When set to true the external canvas will be cleared before the wheel is drawn.
        'imageOverlay'     : false,         // If set to true in image drawing mode the outline of the segments will be displayed over the image. Does nothing in code drawMode.
        'drawText'         : true,          // By default the text of the segments is rendered in code drawMode and not in image drawMode.
        'pointerAngle'     : 0,             // Location of the pointer that indicates the prize when wheel has stopped. Default is 0 so the (corrected) 12 o'clock position.
        'wheelImage'       : null           // Must be set to image data in order to use image to draw the wheel - drawMode must also be 'image'.
	};
	
	
    // -----------------------------------------
    // Loop through the default options and create properties of this class set to the value for the option passed in
	// or if not value for the option was passed in then to the default.
	for (var key in defaultOptions)
	{
		if ((options != null) && (typeof(options[key]) !== 'undefined'))
        {
			this[key] = options[key];
        }
		else
        {
			this[key] = defaultOptions[key];
        }
	}
    
    // Also loop though the passed in options and add anything specified not part of the class in to it as a property. 
    if (options != null)
    {
        for (var key in options)
        {
            if (typeof(this[key]) === 'undefined')
            {
                this[key] = options[key];
            }
        }
    }
	
	
    // ------------------------------------------
	// If the id of the canvas is set, try to get the externalCanvas and context as we want to store these as properties of this class.
	if (this.canvasId)
	{
		// There are 2 canvases the wheel uses, the externalCanvas is the one seen on the screen whose id is passed in as the canvasId
        // and there is an internal canvas which is used to build the wheel on so all it's graphical elements can be added.
        this.externalCanvas = document.getElementById(this.canvasId);
        
		if (this.externalCanvas)
		{
			// If the centerX and centerY have not been specified in the options then default to center of the externalCanvas 
            // and make the outerRadius half of the canvas width - this means the wheel will fill the canvas.
			if (this.centerX == null)
            {
				this.centerX = this.externalCanvas.width / 2;
            }
				
			if (this.centerY == null)
            {
				this.centerY = this.externalCanvas.height / 2;
            }
				
			if (this.outerRadius == null)
			{
				// Need to set to half the width of the shortest dimension of the canvas as the canvas may not be square.
				// Minus the line segment line width otherwise the lines around the segments on the top,left,bottom,right 
                // side are chopped by the edge of the canvas.
				if (this.externalCanvas.width < this.externalCanvas.height)
                {
					this.outerRadius = (this.externalCanvas.width / 2) - this.lineWidth;
                }
				else
                {
					this.outerRadius = (this.externalCanvas.height / 2) - this.lineWidth;
                }
			}
            
            // Also get a 2D context to the external canvas as this might be needed later in order to clear it.
            this.etx = this.externalCanvas.getContext('2d');
		}
		else
		{
			this.externalCanvas = null;
            this.etx = null;
		}
        
        // --------------------------------------
        // Create internal in-memory canvas for the code to use to build the wheel.
        //++ Revisit this because rotation is by the roationAngle now having internal canvas
        //++ and then an external is probably doing more work than need to - draw internal and
        //++ then copy to the external. If movement is actually re-drawing each time too then is waste as no savings there.
        this.canvas = document.createElement('canvas');
        this.canvas.width = (this.externalCanvas.width);
        this.canvas.height = (this.externalCanvas.height);
            
        // Get context as this is used throughout to draw on the canvas.
		this.ctx = this.canvas.getContext('2d');
        
        // The wheel is always drawn in the center of the internal canvas, 
        // ensure that whole number is used to ensure get no blur because or part pixels.
        this.inCenterX = Math.floor((this.canvas.width / 2));
        this.inCenterY = Math.floor((this.canvas.height / 2));
	}
	else
	{
		this.externalCanvas = null;
		this.etx = null;
        
        this.cavnas = null;
        this.ctx = null;
	}
	
	
    // ------------------------------------------
	// Add array of segments to the wheel, then populate with segments if number of segments is specified for this object.
	this.segments = new Array(null);
	
	for (x = 1; x <= this.numSegments; x++)
	{
		// If options for the segments have been specified then create a segment sending these options so 
		// the specified values are used instead of the defaults.
		if ((options != null) && (options['segments']) && (typeof(options['segments'][x-1]) !== 'undefined'))
        {
			this.segments[x] = new Segment(options['segments'][x-1]);
        }
		else
        {
			this.segments[x] = new Segment();
        }
	}
	
	// ------------------------------------------
	// Call function to update the segment sizes setting the starting and ending angles.
	this.updateSegmentSizes();
    
    
    // If the text margin is null then set to same as font size as we want some by default.
    if (this.textMargin === null)
    {
        this.textMargin = (this.textFontSize / 1.7);
    }
    
    // ------------------------------------------
    // If the animation options have been passed in then create animation object as a property of this class
    // and pass the options to it so the animation is set. Otherwise create default animation object.
    if ((options != null) && (options['animation']) && (typeof(options['animation']) !== 'undefined'))
    {
        this.animation = new Animation(options['animation']);
    }
    else
    {
        this.animation = new Animation();
    }
    
    // ------------------------------------------
    // On that note, if the drawMode is image change some defaults provided a value has not been specified.
    if (this.drawMode == 'image')
    {
        // Remove grey fillStyle.
        if (typeof(options['fillStyle']) === 'undefined')
        {
            this.fillStyle = null;
        }
            
        // Set strokeStyle to red.
        if (typeof(options['strokeStyle']) === 'undefined')
        {
            this.strokeStyle = 'red';
        }
            
        // Set drawText to false as we will assume any text is part of the image.
        if (typeof(options['drawText']) === 'undefined')
        {
            this.drawText = false;
        }
            
        // Also set the lineWidth to 1 so that segment overlay will look correct.
        if (typeof(options['lineWidth']) === 'undefined')
        {
            this.lineWidth = 1;
        }
            
        // Set drawWheel to false as normally the image needs to be loaded first.
        if (typeof(drawWheel) === 'undefined')
        {
            drawWheel = false;
        }
    }
    else
    {
        // When in code drawMode the default is the wheel will draw.
        if (typeof(drawWheel) === 'undefined')
        {
            drawWheel = true;
        }
    }
    
    // Create pointer guide.
    if ((options != null) && (options['pointerGuide']) && (typeof(options['pointerGuide']) !== 'undefined'))
    {
        this.pointerGuide = new pointerGuide(options['pointerGuide']);
    }
    else
    {
        this.pointerGuide = new pointerGuide();
    }
	
	// Finally if drawWheel is true then call function to render the wheel, segment text, overlay etc.
    if (drawWheel == true)
    {
		this.draw();
    }
}

// ====================================================================================================================
// This function sorts out the segment sizes. Some segments may have set sizes, for the others what is left out of 
// 360 degrees is shared evenly. What this function actually does is set the start and end angle of the arcs.
// ====================================================================================================================
Winwheel.prototype.updateSegmentSizes = function()
{
	// If this object actually contains some segments
	if (this.segments)
	{
		// First add up the arc used for the segments where the size has been set.
		var arcUsed = 0;
		var numSet  = 0;
		
		// Remember, to make it easy to access segments, the position of the segments in the array starts from 1 (not 0).
		for (x = 1; x <= this.numSegments; x ++)
		{
			if (this.segments[x].size !== null)
			{
				arcUsed += this.segments[x].size;
				numSet ++;
			}
		}
		
		var arcLeft = (360 - arcUsed);
		
		// Create variable to hold how much each segment with non-set size will get in terms of degrees.
		var degreesEach = 0;
		
		if (arcLeft > 0)
        {
			degreesEach = (arcLeft / (this.numSegments - numSet));
        }
			
		// ------------------------------------------
		// Now loop though and set the start and end angle of each segment.
		var currentDegree = 0;
        
		for (x = 1; x <= this.numSegments; x ++)
		{
			// Set start angle.
			this.segments[x].startAngle = currentDegree;
			
			// If the size is set then add this to the current degree to get the end, else add the degreesEach to it.
			if (this.segments[x].size)
            {
				currentDegree += this.segments[x].size;
            }
			else
            {
				currentDegree += degreesEach;
            }
				
			// Set end angle.
			this.segments[x].endAngle = currentDegree;
		}
	}
}

// ====================================================================================================================
// This function clears the internal canvas, the internal canvas is always cleared before re-building the wheel.
// ====================================================================================================================
Winwheel.prototype.clearCanvas = function()
{
    if (this.ctx)
	{
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

// ====================================================================================================================
// This function calls the drawing functions that build the wheel on the internal canvas.
// Normally you would use the draw() function below to render changes to the wheel on the screen.
// ====================================================================================================================
Winwheel.prototype.update = function(clearTheCanvas)
{
    // If have canvas context.
	if (this.ctx)
	{
        // Clear the internal canvas, unless told not to.
        if (typeof(clearTheCanvas) !== 'undefined')
        {
            if (clearTheCanvas == true)
            {
                this.clearCanvas();
            }
        }
        else
        {
            this.clearCanvas();
        }
        
        // Call functions to draw the segments and then segment text.
        if (this.drawMode == 'image')
		{
            // Draw the wheel by loading and drawing an image such as a png on the canvas.
            this.drawWheelImage();
            
            // If we are to draw the text, do so before the overlay is drawn
            // as this allows the overlay to be used to create some interesting effects.
            if (this.drawText == true)
            {
                this.drawSegmentText();
            }
            
            // If image overlay is true then call function to draw the segments over the top of the image. 
            // This is useful during development to check alignment between where the code thinks the segments are and where they appear on the image.
            if (this.imageOverlay == true)
            {
                this.drawSegments();
            }
		}
		else
		{
			// The default operation is to draw the segments using code via the canvas arc() method.
			this.drawSegments();
            
            // The text is drawn on top.
            if (this.drawText == true)
            {
                this.drawSegmentText();
            }
		}
    }
}

// ====================================================================================================================
// This function draws the wheel on the external canvas by first calling the update function which builds the wheel on
// internal canvas, then copying the wheel from the internal canvas to the external one with optional clearing of the external.
// ====================================================================================================================
Winwheel.prototype.draw = function(clearTheCanvas)
{
	// If have internal canvas context.
	if (this.ctx)
	{	
        // Call function to update the wheel on the internal canvas.
        this.update();
        
        // If pointer guide is display property is set to true then call function to draw the pointer guide
        // on the external canvas to help the developer know where the code thinks the pointer is.
        if (this.pointerGuide.display == true)
        {
            this.drawPointerGuide();
        }
    }
    
    // If have external canvas context,
    if (this.etx)
    {
        // --------------------------------------
        // If we are to clear the external canvas then do so. The value for the parameter passed in overrides the 
        // global default so if it is not undefined then do what it says, otherwise do the default.
        if (typeof(clearTheCanvas) !== 'undefined')
        {
            if (clearTheCanvas == true)
            {
                this.etx.clearRect(0, 0, this.externalCanvas.width, this.externalCanvas.height);
            }
        }
        else
        {
            if (this.clearTheCanvas == true)
            {
                this.etx.clearRect(0, 0, this.externalCanvas.width, this.externalCanvas.height);
            }
        }
        
        // --------------------------------------
        // And copy the internal canvas to the external one so the user can now see the updated wheel.
        // There is a little bit of trickery to this because we need to make sure the center point of 
        // the wheel at the centerX and centerY specified on the externalCanvas.
        this.updateExternalXY();
        this.etx.drawImage(this.canvas, this.externalX, this.externalY);
	}
}

// ====================================================================================================================
// Draws a line from the center of the wheel to the outside at the angle where the code thinks the pointer is.
// ====================================================================================================================
Winwheel.prototype.drawPointerGuide = function()
{
    // If have external canvas context.
    if (this.ctx)
    {
        this.ctx.save();
        this.ctx.translate(this.canvas.width / 2, this.canvas.height / 2);
		this.ctx.rotate(this.degToRad(this.pointerAngle));
		this.ctx.translate(-this.canvas.width / 2, -this.canvas.height / 2);
        
        this.ctx.strokeStyle = this.pointerGuide.strokeStyle;
        this.ctx.lineWidth = this.pointerGuide.lineWidth;
        
        // Draw from the center of the wheel out at the pointer angle to the edge of the canvas.
        this.ctx.beginPath();
        this.ctx.moveTo(this.canvas.width / 2, this.canvas.height / 2);
        this.ctx.lineTo(this.centerX, 0);
        
        this.ctx.stroke();
        this.ctx.restore();
    }
}

// ====================================================================================================================
// This function takes an image such as PNG and draws it on the canvas making its center at the centerX and center for the wheel.
// ====================================================================================================================
Winwheel.prototype.drawWheelImage = function()
{
    // Double check the wheelImage property of this class is not null. This does not actually detect that an image
    // source was set and actually loaded so might get error if this is not the case. This is why the initial call
    // to draw() should be done from a wheelImage.onload callback as detailed in example documentation.
    if (this.wheelImage != null)
    {
        // Work out the correct X and Y to draw the image at. We need to get the center point of the image
        // aligned over the center point of the wheel, we can't just place it at 0, 0.
        var imageLeft = (this.centerX - (this.wheelImage.height / 2));
        var imageTop  = (this.centerY - (this.wheelImage.width / 2));
        
        // Rotate and then draw the wheel. We must rotate by the rotationAngle before drawing to ensure that
        // image wheels will spin.
        this.ctx.save();
        this.ctx.translate(this.canvas.width / 2, this.canvas.height / 2);
		this.ctx.rotate(this.degToRad(this.rotationAngle));
		this.ctx.translate(-this.canvas.width / 2, -this.canvas.height / 2);
        
        this.ctx.drawImage(this.wheelImage, imageLeft, imageTop);
        
        this.ctx.restore();
    }
}

// ====================================================================================================================
// This function draws the wheel on the page by rendering the segments on the canvas.
// ====================================================================================================================
Winwheel.prototype.drawSegments = function()
{
	// Again check have context in case this function was called directly and not via draw function.
	if (this.ctx)
	{
        // Draw the segments if there is at least one in the segments array.
		if (this.segments)
		{
			// Loop though and output all segments - position 0 of the array is not used, so start loop from index 1
			// this is to avoid confusion when talking about the first segment.
			for (x = 1; x <= this.numSegments; x ++)
			{
                // Get the segment object as we need it to read options from.
				seg = this.segments[x];
				
				var fillStyle;
				var lineWidth;
				var strokeStyle;
				
				// Set the variables that defined in the segment, or use the default options.
				if (seg.fillStyle !== null)
					fillStyle = seg.fillStyle;
				else
					fillStyle = this.fillStyle;
				
				this.ctx.fillStyle = fillStyle;
				
				if (seg.lineWidth !== null)
					lineWidth = seg.lineWidth;
				else
					lineWidth = this.lineWidth;
					
				this.ctx.lineWidth = lineWidth;
				
				if (seg.strokeStyle !== null)
					strokeStyle = seg.strokeStyle;
				else
					strokeStyle = this.strokeStyle;
			
				this.ctx.strokeStyle = strokeStyle;
				
				
                // Check there is a strokeStyle or fillStyle, if either the the segment is invisible so should not 
                // try to draw it otherwise a path is began but not ended.
                if ((strokeStyle) || (fillStyle))
                {
                    // ----------------------------------
                    // Begin a path as the segment consists of an arc and 2 lines.
                    this.ctx.beginPath();
                    
                    // If don't have an inner radius then move to the center of the wheel as we want a line out from the center
                    // to the start of the arc for the outside of the wheel when we arc. Canvas will draw the connecting line for us.
                    if (!this.innerRadius)
                    {
                        this.ctx.moveTo(this.inCenterX, this.inCenterY);
                    }
                    else
                    {
                       //++ do need to draw the starting line in the correct x + y based on the start angle
                       //++ otherwise as seen when the wheel does not use up 360 the starting segment is missing the stroked side,
                    }
                    
                    // Draw the outer arc of the segment clockwise in direction -->
                    this.ctx.arc(this.inCenterX, this.inCenterY, this.outerRadius, this.degToRad(seg.startAngle + this.rotationAngle - 90), this.degToRad(seg.endAngle + this.rotationAngle - 90), false);
                    
                    if (this.innerRadius)
                    {
                        // Draw another arc, this time anticlockwise <-- at the innerRadius between the end angle and the start angle.
                        // Canvas will draw a connecting line from the end of the outer arc to the beginning of the inner arc completing the shape.
                        
                        //++ Think the reason the lines are thinner for 2 of the segments is because the thing auto chops part of it
                        //++ when doing the next one. Again think that actually drawing the lines will help.
                        
                        this.ctx.arc(this.inCenterX, this.inCenterY, this.innerRadius, this.degToRad(seg.endAngle + this.rotationAngle - 90), this.degToRad(seg.startAngle + this.rotationAngle - 90), true);
                    }
                    else
                    {
                        // If no inner radius then we draw a line back to the center of the wheel.
                        this.ctx.lineTo(this.inCenterX, this.inCenterY);
                    }
                    
                    // Fill and stroke the segment. Only do either if a style was specified, if the style is null then 
                    // we assume the developer did not want that particular thing. 
                    // For example no stroke style so no lines to be drawn.
                    if (fillStyle)
                        this.ctx.fill();
                    
                    if (strokeStyle)
                        this.ctx.stroke();
                }
			}
		}
	}
}

// ====================================================================================================================
// This draws the text on the segments using the specified text options.
// ====================================================================================================================
Winwheel.prototype.drawSegmentText = function()
{	
	// Again only draw the text if have a canvas context.
	if (this.ctx)
	{
		// Declare variables to hold the values. These are populated either with the value for the specific segment,
		// or if not specified then the global default value.
		var fontFamily;
		var fontSize;
		var fontWeight;
		var orientation;
		var alignment;
		var direction;
		var margin;
		var fillStyle;
		var strokeStyle;
		var lineWidth;
		var fontSetting;
        
		// Loop though all the segments.
		for (x = 1; x <= this.numSegments; x ++)
		{
			// Save the context so it is certain that each segment text option will not affect the other.
			this.ctx.save();
			
			// Get the segment object as we need it to read options from.
			seg = this.segments[x];
			
			// Check is text as no point trying to draw if there is no text to render.
			if (seg.text)
			{
				// Set values to those for the specific segment or use global default if null.
				if (seg.textFontFamily  !== null) 	fontFamily 	= seg.textFontFamily;  else fontFamily  = this.textFontFamily;
				if (seg.textFontSize    !== null) 	fontSize 	= seg.textFontSize;    else fontSize 	= this.textFontSize;	
				if (seg.textFontWeight  !== null) 	fontWeight 	= seg.textFontWeight;  else fontWeight  = this.textFontWeight;
				if (seg.textOrientation !== null) 	orientation = seg.textOrientation; else orientation = this.textOrientation;					
				if (seg.textAlignment   !== null) 	alignment 	= seg.textAlignment;   else alignment 	= this.textAlignment;
				if (seg.textDirection   !== null) 	direction 	= seg.textDirection;   else direction 	= this.textDirection;
				if (seg.textMargin      !== null) 	margin 		= seg.textMargin; 	   else margin 	    = this.textMargin;
				if (seg.textFillStyle   !== null) 	fillStyle 	= seg.textFillStyle;   else fillStyle 	= this.textFillStyle;
				if (seg.textStrokeStyle !== null) 	strokeStyle = seg.textStrokeStyle; else strokeStyle = this.textStrokeStyle;
				if (seg.textLineWidth   !== null) 	lineWidth 	= seg.textLineWidth;   else lineWidth 	= this.textLineWidth;
					
				// ------------------------------
				// We need to put the font bits together in to one string.
				fontSetting = '';
				
				if (fontWeight != null)
					fontSetting += fontWeight + ' ';
				
				if (fontSize != null)
					fontSetting += fontSize + 'px ';	// Fonts on canvas are always a px value.
					
				if (fontFamily != null)
					fontSetting += fontFamily;
				
				// Now set the canvas context to the decided values.
				this.ctx.font 		 = fontSetting;
				this.ctx.fillStyle 	 = fillStyle;
				this.ctx.strokeStyle = strokeStyle;
				this.ctx.lineWidth 	 = lineWidth;
				
				// ---------------------------------
				// If direction is reversed then do things differently than if normal (which is the default - see further down)
				if (direction == 'reversed')
				{
					// When drawing reversed or 'upside down' we need to do some trickery on our part.
					// The canvas text rendering function still draws the text left to right and the correct way up, 
					// so we need to overcome this with rotating the opposite side of the wheel the correct way up then pulling the text
					// through the center point to the correct segment it is supposed to be on.
					if (orientation == 'horizontal')
					{
						if (alignment == 'inner')
							this.ctx.textAlign = 'right';
						else if (alignment == 'outer')
							this.ctx.textAlign = 'left';
						else
							this.ctx.textAlign = 'center';
						
						this.ctx.textBaseline = 'middle';
						
						// Work out the angle to rotate the wheel, this is in the center of the segment but on the opposite side of the wheel which is why do -180.
						var textAngle = this.degToRad((seg.endAngle - ((seg.endAngle - seg.startAngle) / 2) + this.rotationAngle - 90) - 180);
						
						this.ctx.save();
						this.ctx.translate(this.canvas.width / 2, this.canvas.height / 2);
						this.ctx.rotate(textAngle);
						this.ctx.translate(-this.canvas.width / 2, -this.canvas.height / 2);
						
						if (alignment == 'inner')
						{
							// In reversed state the margin is subtracted from the innerX.
							// When inner the inner radius also comes in to play.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX - this.innerRadius - margin, this.inCenterY);
							
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX - this.innerRadius - margin, this.inCenterY);
						}
						else if (alignment == 'outer')
						{
							// In reversed state the position is the center minus the radius + the margin for outer aligned text.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX - this.outerRadius + margin, this.inCenterY);
								
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX - this.outerRadius + margin, this.inCenterY);
						}
						else
						{
							// In reversed state the everything in minused.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX - this.innerRadius - ((this.outerRadius - this.innerRadius) / 2) - margin, this.inCenterY);
								
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX - this.innerRadius - ((this.outerRadius - this.innerRadius) / 2) - margin, this.inCenterY);
						}
						
						this.ctx.restore();
					}
					else if (orientation == 'vertical')
					{
						// See normal code further down for comments on how it works, this is similar by plus/minus is reversed.
						this.ctx.textAlign = 'center';
						
						// In reversed mode this are reversed.
						if (alignment == 'inner')
							this.ctx.textBaseline = 'top';
						else if (alignment == 'outer')
							this.ctx.textBaseline = 'bottom';
						else
							this.ctx.textBaseline = 'middle';
						
						var textAngle = (seg.endAngle - ((seg.endAngle - seg.startAngle) / 2) - 180);
                        textAngle += this.rotationAngle;
                        
						this.ctx.save();
						this.ctx.translate(this.inCenterX, this.inCenterY);
						this.ctx.rotate(this.degToRad(textAngle));
						this.ctx.translate(-this.inCenterX, -this.inCenterY);
						
						if (alignment == 'outer')
							var yPos = (this.inCenterY + this.outerRadius - margin);
						else if (alignment == 'inner')
							var yPos = (this.inCenterY + this.innerRadius + margin);
						
						// I have found that the text looks best when a fraction of the font size is shaved off.
                        var yInc = (fontSize - (fontSize / 9));
					
						// Loop though and output the characters.
						if (alignment == 'outer')
						{
							// In reversed mode outer means text in 6 o'clock segment sits at bottom of the wheel and we draw up.
							for (var c = (seg.text.length -1); c >= 0; c--)
							{
								character = seg.text.charAt(c);
							
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
									
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
								
								yPos -= yInc;
							}
						}
						else if (alignment == 'inner')
						{
							// In reversed mode inner text is drawn from top of segment at 6 o'clock position to bottom of the wheel.
							for (var c = 0; c < seg.text.length; c++)
							{
								character = seg.text.charAt(c);
								
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
									
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
									
								yPos += yInc;
							}
						}
						else if (alignment == 'center')
						{
							// Again for reversed this is the opposite of before.
							// If there is more than one character in the text then an adjustment to the position needs to be done.
							// What we are aiming for is to position the center of the text at the center point between the inner and outer radius.
							var centerAdjustment = 0;
							
							if (seg.text.length > 1)
							{
								centerAdjustment = (yInc * (seg.text.length -1) / 2);
							}
							
							var yPos = (this.inCenterY + this.innerRadius + ((this.outerRadius - this.innerRadius) / 2)) + centerAdjustment + margin;
							
							for (var c = (seg.text.length -1); c >= 0; c--)
							{
								character = seg.text.charAt(c);
							
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
									
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
									
								yPos -= yInc;
							}
						}
						
						this.ctx.restore();
					}
					else if (orientation == 'curved')
					{
						// There is no built in canvas function to draw text around an arc,
                        // so we need to do this ourselves.
						var radius = 0;
						
						// Set the alignment of the text - inner, outer, or center by calculating
                        // how far out from the center point of the wheel the text is drawn.
						if (alignment == 'inner')
						{
							// When alignment is inner the radius is the innerRadius plus any margin.
							radius = this.innerRadius + margin;
                            this.ctx.textBaseline = 'top';
						}
						else if (alignment == 'outer')
						{
							// Outer it is the outerRadius minus any margin.
							radius = this.outerRadius - margin;
                            this.ctx.textBaseline = 'bottom';
						}
						else if (alignment == 'center')
						{
							// When center we want the text halfway between the inner and outer radius.
							radius = this.innerRadius + margin + ((this.outerRadius - this.innerRadius) / 2);
							this.ctx.textBaseline = 'middle';
						}
						
						// Set the angle to increment by when looping though and outputting the characters in the text
                        // as we do this by rotating the wheel small amounts adding each character.
						var anglePerChar = 0;
						var drawAngle = 0;
						
						// If more than one character in the text then...
                        if (seg.text.length > 1)
						{
							// Text is drawn from the left.
							this.ctx.textAlign = 'left';
							
							// Work out how much angle the text rendering loop below needs to rotate by for each character to render them next to each other.
                            // I have discovered that 4 * the font size / 10 at 100px radius is the correct spacing for between the characters
                            // using a monospace font, non monospace may look a little odd as in there will appear to be extra spaces between chars.
                            anglePerChar = (4 * (fontSize / 10));
                            
                            // Work out what percentage the radius the text will be drawn at is of 100px.
                            radiusPercent = (100 / radius);
                            
                            // Then use this to scale up or down the anglePerChar value.
                            // When the radius is less than 100px we need more angle between the letters, when radius is greater (so the text is further
                            // away from the center of the wheel) the angle needs to be less otherwise the characters will appear further apart.
                            anglePerChar = (anglePerChar * radiusPercent);
                            
                            // Next we want the text to be drawn in the middle of the segment, without this it would start at the beginning of the segment.
                            // To do this we need to work out how much arc the text will take up in total then subtract half of this from the center
                            // of the segment so that it sits centred.
                            totalArc = (anglePerChar * seg.text.length);
                            
                            // Now set initial draw angle to half way between the start and end of the segment.
							drawAngle = seg.startAngle + (((seg.endAngle - seg.startAngle) / 2) - (totalArc / 2));
						}
						else
						{
							// The initial draw angle is the center of the segment when only one character.
							drawAngle = (seg.startAngle + ((seg.endAngle - seg.startAngle) / 2));
							
							// To ensure is dead-center the text alignment also needs to be centered.
							this.ctx.textAlign = 'center';
						}
                        
                        // ----------------------
                        // Adjust the initial draw angle as needed to take in to account the rotationAngle of the wheel.
                        drawAngle += this.rotationAngle;
                        
                        // And as with other 'reverse' text direction functions we need to subtract 180 degrees from the angle
                        // because when it comes to draw the characters in the loop below we add the radius instead of subtract it.
                        drawAngle -= 180;
						
						// ----------------------
						// Now the drawing itself.
                        // In reversed direction mode we loop through the characters in the text backwards in order for them to appear on screen correctly
						for (c = seg.text.length; c >= 0; c--)
						{
							this.ctx.save();
                            
                            character = seg.text.charAt(c);
							
							// Rotate the wheel to the draw angle as we need to add the character at this location.
                            this.ctx.translate(this.inCenterX, this.inCenterY);
							this.ctx.rotate(this.degToRad(drawAngle));
							this.ctx.translate(-this.inCenterX, -this.inCenterY);
							
							// Now draw the character directly below the center point of the wheel at the appropriate radius.
                            // Note in the reversed mode we add the radius to the this.inCenterY instead of subtract.
							if (strokeStyle)
								this.ctx.strokeText(character, this.inCenterX, this.inCenterY + radius);
								
							if (fillStyle)
								this.ctx.fillText(character, this.inCenterX, this.inCenterY + radius);
							
							// Increment the drawAngle by the angle per character so next loop we rotate
                            // to the next angle required to draw the character at.
							drawAngle += anglePerChar;
                            
                            this.ctx.restore();
						}
					}
				}
				else
				{
					// Normal direction so do things normally.
					// Check text orientation, of horizontal then reasonably straight forward, if vertical then a bit more work to do.
					if (orientation == 'horizontal')
					{
						// Based on the text alignment, set the correct value in the context.
						if (alignment == 'inner')
							this.ctx.textAlign = 'left';
						else if (alignment == 'outer')
							this.ctx.textAlign = 'right';
						else
							this.ctx.textAlign = 'center';
						
						// Set this too.
						this.ctx.textBaseline = 'middle';
						
						// Work out the angle around the wheel to draw the text at, which is simply in the middle of the segment the text is for.
						// The rotation angle is added in to correct the annoyance with the canvas arc drawing functions which put the 0 degrees at the 3 oclock 
						var textAngle = this.degToRad(seg.endAngle - ((seg.endAngle - seg.startAngle) / 2) + this.rotationAngle - 90);
						
						// We need to rotate in order to draw the text because it is output horizontally, so to
						// place correctly around the wheel for all but a segment at 3 o'clock we need to rotate.
						this.ctx.save();
						this.ctx.translate(this.inCenterX, this.inCenterY);
						this.ctx.rotate(textAngle);
						this.ctx.translate(-this.inCenterX, -this.inCenterY);
						
						// --------------------------
						// Draw the text based on its alignment adding margin if inner or outer.
						if (alignment == 'inner')
						{
							// Inner means that the text is aligned with the inner of the wheel. If looking at a segment in in the 3 o'clock position
							// it would look like the text is left aligned within the segment.
							
							// Because the segments are smaller towards the inner of the wheel, in order for the text to fit is is a good idea that
							// a margin is added which pushes the text towards the outer a bit.
							
							// The inner radius also needs to be taken in to account as when inner aligned.
							
							// If fillstyle is set the draw the text filled in.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX + this.innerRadius + margin, this.inCenterY);	
							
							// If stroke style is set draw the text outline.
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX + this.innerRadius + margin, this.inCenterY);
						}
						else if (alignment == 'outer')
						{
							// Outer means the text is aligned with the outside of the wheel, so if looking at a segment in the 3 o'clock position
							// it would appear the text is right aligned. To position we add the radius of the wheel in to the equation 
							// and subtract the margin this time, rather than add it.
						
							// I don't understand why, but in order of the text to render correctly with stroke and fill, the stroke needs to
							// come first when drawing outer, rather than second when doing inner.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX + this.outerRadius - margin, this.inCenterY);
								
							// If fillstyle the fill the text.
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX + this.outerRadius - margin, this.inCenterY);
						}
						else
						{
							// In this case the text is to drawn centred in the segment.
							// Typically no margin is required, however even though centred the text can look closer to the inner of the wheel
							// due to the way the segments narrow in (is optical effect), so if a margin is specified it is placed on the inner 
							// side so the text is pushed towards the outer.
							
							// If stoke style the stroke the text.
							if (fillStyle)
								this.ctx.fillText(seg.text, this.inCenterX + this.innerRadius + ((this.outerRadius - this.innerRadius) / 2) + margin, this.inCenterY);
							
							// If fillstyle the fill the text.
							if (strokeStyle)
								this.ctx.strokeText(seg.text, this.inCenterX + this.innerRadius + ((this.outerRadius - this.innerRadius) / 2) + margin, this.inCenterY);
						}
						
						// Restore the context so that wheel is returned to original position.
						this.ctx.restore();
					}
					else if (orientation == 'vertical')
					{
						// If vertical then we need to do this ourselves because as far as I am aware there is no option built in to html canvas
						// which causes the text to draw downwards or upwards one character after another.
						
						// In this case the textAlign is always center, but the baseline is either top or bottom
						// depending on if inner or outer alignment has been specified.
						this.ctx.textAlign = 'center';
						
						if (alignment == 'inner')
							this.ctx.textBaseline = 'bottom';
						else if (alignment == 'outer')
							this.ctx.textBaseline = 'top';
						else
							this.ctx.textBaseline = 'middle';
						
						// The angle to draw the text at is halfway between the end and the starting angle of the segment.
						var textAngle = seg.endAngle - ((seg.endAngle - seg.startAngle) / 2);
                        
                        // Ensure the rotation angle of the wheel is added in, otherwise the test placement won't match
                        // the segments they are supposed to be for.
                        textAngle += this.rotationAngle;
						
						// Rotate so can begin to place the text.
						this.ctx.save();
						this.ctx.translate(this.inCenterX, this.inCenterY);
						this.ctx.rotate(this.degToRad(textAngle));
						this.ctx.translate(-this.inCenterX, -this.inCenterY);
						
						// Work out the position to start drawing in based on the alignment.
						// If outer then when considering a segment at the 12 o'clock position want to start drawing down from the top of the wheel.
						if (alignment == 'outer')
							var yPos = (this.inCenterY - this.outerRadius + margin);
						else if (alignment == 'inner')
							var yPos = (this.inCenterY - this.innerRadius - margin);
							
						// We need to know how much to move the y axis each time.
                        // This is not quite simply the font size as that puts a larger gap in between the letters
                        // than expected, especially with monospace fonts. I found that shaving a little off makes it look "right".
						var yInc = (fontSize - (fontSize / 9));
					
						// Loop though and output the characters.
						if (alignment == 'outer')
						{
							// For this alignment we draw down from the top of a segment at the 12 o'clock position to simply
							// loop though the characters in order.
							for (var c = 0; c < seg.text.length; c++)
							{
								character = seg.text.charAt(c);
								
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
									
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
								
								yPos += yInc;
							}
						}
						else if (alignment == 'inner')
						{
							// Here we draw from the inner of the wheel up, but in order for the letters in the text text to
							// remain in the correct order when reading, we actually need to loop though the text characters backwards.
							for (var c = (seg.text.length -1); c >= 0; c--)
							{
								character = seg.text.charAt(c);
							
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
									
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
									
								yPos -= yInc;
							}
						}
						else if (alignment == 'center')
						{
							// This is the most complex of the three as we need to draw the text top down centred between the inner and outer of the wheel.
							// So logically we have to put the middle character of the text in the center then put the others each side of it.
							// In reality that is a really bad way to do it, we can achieve the same if not better positioning using a 
							// variation on the method used for the rendering of outer aligned text once we have figured out the height of the text.
							
							// If there is more than one character in the text then an adjustment to the position needs to be done.
							// What we are aiming for is to position the center of the text at the center point between the inner and outer radius.
							var centerAdjustment = 0;
							
							if (seg.text.length > 1)
							{
								centerAdjustment = (yInc * (seg.text.length -1) / 2);
							}
							
							// Now work out where to start rendering the string. This is half way between the inner and outer of the wheel, with the
							// centerAdjustment included to correctly position texts with more than one character over the center. 
							// If there is a margin it is used to push the text away from the center of the wheel.
							var yPos = (this.inCenterY - this.innerRadius - ((this.outerRadius - this.innerRadius) / 2)) - centerAdjustment - margin;
							
							// Now loop and draw just like outer text rendering.
							for (var c = 0; c < seg.text.length; c++)
							{
								character = seg.text.charAt(c);
								
								if (fillStyle)
									this.ctx.fillText(character, this.inCenterX, yPos);
								
								if (strokeStyle)
									this.ctx.strokeText(character, this.inCenterX, yPos);
								
								yPos += yInc;
							}
						}
						
						this.ctx.restore();
					}
					else if (orientation == 'curved')
					{
						// There is no built in canvas function to draw text around an arc, so
                        // we need to do this ourselves.
						var radius = 0;
						
						// Set the alignment of the text - inner, outer, or center by calculating
                        // how far out from the center point of the wheel the text is drawn.
						if (alignment == 'inner')
						{
							// When alignment is inner the radius is the innerRadius plus any margin.
							radius = this.innerRadius + margin;
                            this.ctx.textBaseline = 'bottom';
						}
						else if (alignment == 'outer')
						{
							// Outer it is the outerRadius minus any margin.
							radius = this.outerRadius - margin;
                            this.ctx.textBaseline = 'top';
						}
						else if (alignment == 'center')
						{
							// When center we want the text halfway between the inner and outer radius.
							radius = this.innerRadius + margin + ((this.outerRadius - this.innerRadius) / 2);
							this.ctx.textBaseline = 'middle';
						}
						
						// Set the angle to increment by when looping though and outputting the characters in the text
                        // as we do this by rotating the wheel small amounts adding each character.
						var anglePerChar = 0;
						var drawAngle = 0;
						
						// If more than one character in the text then...
                        if (seg.text.length > 1)
						{
							// Text is drawn from the left.
							this.ctx.textAlign = 'left';
							
							// Work out how much angle the text rendering loop below needs to rotate by for each character to render them next to each other.
                            // I have discovered that 4 * the font size / 10 at 100px radius is the correct spacing for between the characters
                            // using a monospace font, non monospace may look a little odd as in there will appear to be extra spaces between chars.
                            anglePerChar = (4 * (fontSize / 10));
                            
                            // Work out what percentage the radius the text will be drawn at is of 100px.
                            radiusPercent = (100 / radius);
                            
                            // Then use this to scale up or down the anglePerChar value.
                            // When the radius is less than 100px we need more angle between the letters, when radius is greater (so the text is further
                            // away from the center of the wheel) the angle needs to be less otherwise the characters will appear further apart.
                            anglePerChar = (anglePerChar * radiusPercent);
                            
                            // Next we want the text to be drawn in the middle of the segment, without this it would start at the beginning of the segment.
                            // To do this we need to work out how much arc the text will take up in total then subtract half of this from the center
                            // of the segment so that it sits centred.
                            totalArc = (anglePerChar * seg.text.length);
                            
                            // Now set initial draw angle to half way between the start and end of the segment.
							drawAngle = seg.startAngle + (((seg.endAngle - seg.startAngle) / 2) - (totalArc / 2));
						}
						else
						{
							// The initial draw angle is the center of the segment when only one character.
							drawAngle = (seg.startAngle + ((seg.endAngle - seg.startAngle) / 2));
							
							// To ensure is dead-center the text alignment also needs to be centred.
							this.ctx.textAlign = 'center';
						}
                        
                        // ----------------------
                        // Adjust the initial draw angle as needed to take in to account the rotationAngle of the wheel.
                        drawAngle += this.rotationAngle;
						
						// ----------------------
						// Now the drawing itself.
						// Loop for each character in the text.
						for (c = 0; c < (seg.text.length); c++)
						{
							this.ctx.save();
                            
                            character = seg.text.charAt(c);
							
							// Rotate the wheel to the draw angle as we need to add the character at this location.
                            this.ctx.translate(this.inCenterX, this.inCenterY);
							this.ctx.rotate(this.degToRad(drawAngle));
							this.ctx.translate(-this.inCenterX, -this.inCenterY);
							
							// Now draw the character directly above the center point of the wheel at the appropriate radius.
							if (strokeStyle)
								this.ctx.strokeText(character, this.inCenterX, this.inCenterY - radius);
								
							if (fillStyle)
								this.ctx.fillText(character, this.inCenterX, this.inCenterY - radius);
							
							// Increment the drawAngle by the angle per character so next loop we rotate
                            // to the next angle required to draw the character at.
							drawAngle += anglePerChar;
                            
                            this.ctx.restore();
						}
					}
				}
			}
			
			// Restore so all text options are reset ready for the next text.
			this.ctx.restore();
		}
	}
}

// ====================================================================================================================
// Converts degrees to radians which is what is used when specifying the angles on HTML5 canvas arcs.
// ====================================================================================================================
Winwheel.prototype.degToRad = function(d)
{
	return d * 0.0174532925199432957;
}

// ====================================================================================================================
// This function sets the center location of the wheel, saves a function call to set x then y.
// ====================================================================================================================
Winwheel.prototype.setCenter = function(x, y)
{
	this.centerX = x;
	this.centerY = y;
    
    // Call this function to re-compute the external X and Y so any changes
    // to the centerX and centerY during animation produce expected results.
    this.updateExternalXY();
}

// ====================================================================================================================
// This function allows a segment to be added to the wheel. The position of the segment is optional, 
// if not specified the new segment will be added to the end of the wheel.
// ====================================================================================================================
Winwheel.prototype.addSegment = function(options, position)
{
	// Create a new segment object passing the options in.
	newSegment = new Segment(options);
	
	// Increment the numSegments property of the class since new segment being added.
	this.numSegments ++;
	var segmentPos;
	
	// Work out where to place the segment, the default is simply as a new segment at the end of the wheel.
	if (typeof position !== 'undefined')
	{
		// Because we need to insert the segment at this position, not overwrite it, we need to move all segments after this 
		// location along one in the segments array, before finally adding this new segment at the specified location.
		for (var x = this.numSegments; x > position; x --)
		{
			this.segments[x] = this.segments[x -1];
		}
		
		this.segments[position] = newSegment;
		segmentPos = position;
	}
	else
	{
		this.segments[this.numSegments] = newSegment;
		segmentPos = this.numSegments;
	}
	
	// Since a segment has been added the segment sizes need to be re-computed so call function to do this.
	this.updateSegmentSizes();
	
	// Return the segment object just created in the wheel (JavaScript will return it by reference), so that
	// further things can be done with it by the calling code if desired.
	return this.segments[segmentPos];
}

// ====================================================================================================================
// This function must be used if the canvasId is changed as we also need to get the context of the new canvas.
// ====================================================================================================================
Winwheel.prototype.setCanvasId = function(canvasId)
{
    if (canvasId)
    {
        this.canvasId = canvasId;
        this.externalCanvas = document.getElementById(this.canvasId);
        
        if (this.externalCanvas)
        {
            this.etx = this.externalCanvas.getContext('2d');
        }
    }
    else
    {
        this.canvasId = null
        this.etx = null;
        this.externalCanvas = null;
    }
}

// ====================================================================================================================
// This function deletes the specified segment from the wheel by removing it from the segments array.
// It then sorts out the other bits such as update of the numSegments.
// ====================================================================================================================
Winwheel.prototype.deleteSegment = function(position)
{
	// There needs to be at least one segment in order for the wheel to draw, so only allow delete if there
	// is more than one segment currently left in the wheel.
    
    //++ check that specifying a position that does not exist - say 10 in a 6 segment wheel does not cause issues.
	if (this.numSegments > 1)
	{
		// If the position of the segment to remove has been specified.
		if (typeof position !== 'undefined')
		{
			// The array is to be shortened so we need to move all segments after the one
			// to be removed down one so there is no gap.
			for (var x = position; x < this.numSegments; x ++)
			{
				this.segments[x] = this.segments[x + 1];
			}
		}
		
		// Unset the last item in the segments array since there is now one less.
		this.segments[this.numSegments] = undefined;
		
		// Decrement the number of segments, 
		// then call function to update the segment sizes.
		this.numSegments --;
		this.updateSegmentSizes();
	}
}

// ====================================================================================================================
// This function takes the x an the y of a mouse event, such as click or move, and converts the x and the y in to
// co-ordinates on the canvas as the raw values are the x and the y from the top and left of the user's browser.
// ====================================================================================================================
Winwheel.prototype.windowToCanvas = function(x, y)
{
	var bbox = this.externalCanvas.getBoundingClientRect();
	
	return { 
		x: Math.floor(x - bbox.left * (this.externalCanvas.width / bbox.width)), 
		y: Math.floor(y - bbox.top *  (this.externalCanvas.height / bbox.height))
	};
}

// ====================================================================================================================
// This function returns the segment object located at the specified x and y coordinates on the canvas.
// It is used to allow things to be done with a segment clicked by the user, such as highlight, display or change some values, etc.
// ====================================================================================================================
Winwheel.prototype.getSegmentAt = function(x, y)
{
	var foundSegment = null;
    
    // Call function to return segment number.
    var segmentNumber = this.getSegmentNumberAt(x, y);
    
    // If found one then set found segment to pointer to the segment object.
    if (segmentNumber !== null)
    {
        foundSegment = this.segments[segmentNumber];
    }
    
	return foundSegment;
}

// ====================================================================================================================
// Returns the number of the segment clicked instead of the segment object.
// ====================================================================================================================
Winwheel.prototype.getSegmentNumberAt = function(x, y)
{
    // Call function above to convert the raw x and y from the user's browser to canvas coordinates
	// i.e. top and left is top and left of canvas, not top and left of the user's browser.
	var loc = this.windowToCanvas(x, y);
	    
	// ------------------------------------------
	// Now start the process of working out the segment clicked.
	// First we need to figure out the angle of an imaginary line between the centerX and centerY of the wheel and
	// the X and Y of the location (for example a mouse click).
	var topBottom;
	var leftRight;
	var adjacentSideLength;
	var oppositeSideLength;
	var hypotenuseSideLength;
	
	// We will use right triangle maths with the TAN function.
	// The start of the triangle is the wheel center, the adjacent side is along the x axis, and the opposite side is along the y axis.
	
	// We only ever use positive numbers to work out the triangle and the center of the wheel needs to be considered as 0 for the numbers
	// in the maths which is why there is the subtractions below. We also remember what quadrant of the wheel the location is in as we
	// need this information later to add 90, 180, 270 degrees to the angle worked out from the triangle to get the position around a 360 degree wheel.
	if (loc.x > this.centerX)
	{
		adjacentSideLength = (loc.x - this.centerX);
		leftRight = 'R';	// Location is in the right half of the wheel.
	}
	else
	{
		adjacentSideLength = (this.centerX - loc.x);
		leftRight = 'L';	// Location is in the left half of the wheel.
	}
	
	if (loc.y > this.centerY)
	{
		oppositeSideLength = (loc.y - this.centerY);
		topBottom = 'B';	// Bottom half of wheel.
	}
	else
	{
		oppositeSideLength = (this.centerY - loc.y);
		topBottom = 'T';	// Top Half of wheel.
	}
	
	// Now divide opposite by adjacent to get tan value.
	var tanVal = oppositeSideLength / adjacentSideLength;
	
	// Use the tan function and convert results to degrees since that is what we work with.
	var result = (Math.atan(tanVal) * 180/Math.PI);
	var locationAngle = 0;
	
	// We also need the length of the hypotenuse as later on we need to compare this to the outerRadius of the segment / circle.
	hypotenuseSideLength = Math.sqrt((oppositeSideLength * oppositeSideLength) + (adjacentSideLength * adjacentSideLength));
	
	// ------------------------------------------
	// Now to make sense around the wheel we need to alter the values based on if the location was in top or bottom half 
	// and also right or left half of the wheel, by adding 90, 180, 270 etc. Also for some the initial locationAngle needs to be inverted.
	if ((topBottom == 'T') && (leftRight == 'R'))
	{
		locationAngle = Math.round(90 - result);
	}
	else if ((topBottom == 'B') && (leftRight == 'R'))
	{
		locationAngle = Math.round(result + 90);
	}
	else if ((topBottom == 'B') && (leftRight == 'L'))
	{
		locationAngle = Math.round((90 - result) + 180);
	}
	else if ((topBottom == 'T') && (leftRight == 'L'))
	{
		locationAngle = Math.round(result + 270);
	}

    // ------------------------------------------
    // And now we have to adjust to make sense when the wheel is rotated from the 0 degrees either
    // positive or negative and it can be many times past 360 degrees.
    if (this.rotationAngle != 0)
    {
        var rotatedPosition = this.getRotationPosition();
        
        // So we have this, now we need to alter the locationAngle as a result of this.
        locationAngle = (locationAngle - rotatedPosition);
        
        // If negative then take the location away from 360.
        if (locationAngle < 0)
        {
            locationAngle = (360 - Math.abs(locationAngle));
        }
    }
	
	// ------------------------------------------
	// OK, so after all of that we have the angle of a line between the centerX and centerY of the wheel and
	// the X and Y of the location on the canvas where the mouse was clicked. Now time to work out the segment 
	// this corresponds to. We can use the segment start and end angles for this.
	var foundSegmentNumber = null;
	
	for (var x = 1; x <= this.numSegments; x ++)
	{
		// Due to segments sharing start and end angles, if line is clicked will pick earlier segment.
		if ((locationAngle >= this.segments[x].startAngle) && (locationAngle <= this.segments[x].endAngle))
		{   
            // To ensure that a click anywhere on the canvas in the segment direction will not cause a
			// segment to be matched, as well as the angles, we need to ensure the click was within the radius
			// of the segment (or circle if no segment radius).
			
			// If the hypotenuseSideLength (length of location from the center of the wheel) is with the radius
			// then we can assign the segment to the found segment and break out the loop.
			
			// Have to take in to account hollow wheels (doughnuts) so check is greater than innerRadius as
            // well as less than or equal to the outerRadius of the wheel.
			if ((hypotenuseSideLength >= this.innerRadius) && (hypotenuseSideLength <= this.outerRadius))
            {
                foundSegmentNumber = x;
                break;
            }
		}
	}
	
	// Finally return the number.
	return foundSegmentNumber;
}

// ====================================================================================================================
// This function computes/re-computes the X and Y on the external canvas that the wheel on the internal canvas needs
// to be copied at in order to ensure the center of the wheel is over the specified centerX and centerY.
// ====================================================================================================================
Winwheel.prototype.updateExternalXY = function()
{
    //++ is this still needed?
    externalX = 0;
    externalY = 0;
    
    if (this.centerX < (this.canvas.width / 2))
    {
        externalX = (0 - (this.canvas.width / 2)) + this.centerX;
    }
    else
    {
        externalX = (this.centerX - (this.canvas.width / 2));
    }
    
    if (this.centerY < (this.canvas.height / 2))
    {
        externalY = (0 - (this.canvas.height / 2)) + this.centerY;
    }
    else
    {
        externalY = (this.centerY - (this.canvas.height / 2));
    }
    
    // Note any fractional values cause blurriness of the image so need to floor this to ensure that
    // the X and the Y are whole numbers otherwise the browser blurs things to straddle the part-pixels.
    this.externalX = Math.floor(externalX);
    this.externalY = Math.floor(externalY);
}

// ====================================================================================================================
// Returns a reference to the segment that is at the location of the pointer on the wheel.
// ====================================================================================================================
Winwheel.prototype.getIndicatedSegment = function()
{
    // Call function below to work this out and return the prizeNumber.
    var prizeNumber = this.getIndicatedSegmentNumber();
    
    // Then simply return the segment in the segments array at that position.
    return this.segments[prizeNumber];
}

// ====================================================================================================================
// Works out the segment currently pointed to by the pointer of the wheel. Normally called when the spinning has stopped
// to work out the prize the user has won. Returns the number of the segment in the segments array.
// ====================================================================================================================
Winwheel.prototype.getIndicatedSegmentNumber = function()
{
    var indicatedPrize = 0;
    var rawAngle = this.getRotationPosition();
    
    // Now we have the angle of the wheel, but we need to take in to account where the pointer is because
    // will not always be at the 12 o'clock 0 degrees location.
    var relativeAngle = Math.floor(this.pointerAngle - rawAngle);
        
    if (relativeAngle < 0)
    {
        relativeAngle = 360 - Math.abs(relativeAngle);
    }
            
    // Now we can work out the prize won by seeing what prize segment startAngle and endAngle the relativeAngle is between.
    for (x = 1; x < (this.segments.length); x ++)
    {
        if ((relativeAngle >= this.segments[x]['startAngle']) && (relativeAngle <= this.segments[x]['endAngle']))
        {
            indicatedPrize = x;
            break;
        }
    }
    
    return indicatedPrize;
}

// ==================================================================================================================================================
// Returns the rotation angle of the wheel corrected to 0-360 (i.e. removes all the multiples of 360).
// ==================================================================================================================================================
Winwheel.prototype.getRotationPosition = function()
{
    var rawAngle = this.rotationAngle;  // Get current rotation angle of wheel.
    
    // If positive work out how many times past 360 this is and then take the floor of this off the rawAngle.
    if (rawAngle >= 0)
    {
        if (rawAngle > 360)
        {
            // Get floor of the number of times past 360 degrees.
            var timesPast360 = Math.floor(rawAngle / 360);
        
            // Take all this extra off to get just the angle 0-360 degrees.
            rawAngle = (rawAngle - (360 * timesPast360));
        }
    }
    else
    {
        // Is negative, need to take off the extra then convert in to 0-360 degree value
        // so if, for example, was -90 then final value will be (360 - 90) = 270 degrees.
        if (rawAngle < -360)
        {
            var timesPast360 = Math.ceil(rawAngle / 360);   // Ceil when negative.
            
            rawAngle = (rawAngle - (360 * timesPast360));   // Is minus because dealing with negative.
        }
        
        rawAngle = (360 + rawAngle);    // Make in the range 0-360. Is plus because raw is still negative.
    }
    
    return rawAngle;
}

// ==================================================================================================================================================
// This function starts the wheel's animation by using the properties of the animation object of of the wheel to begin the a greensock tween.
// ==================================================================================================================================================
Winwheel.prototype.startAnimation = function()
{
    if (this.animation)
    {
        // Call function to compute the animation properties.
        this.computeAnimation();
        
        // Set this global variable to this object as an external function is required to call the draw() function on the wheel
        // each loop of the animation as Greensock cannot call the draw function directly on this class.
        winwheelToDrawDuringAnimation = this;
    
        // Instruct tween to call the winwheel animation loop each tick of the animation
        // this is required in order to re-draw the wheel and actually show the animation.
        TweenLite.ticker.addEventListener("tick", winwheelAnimationLoop);
    
        //++ How do we replay the animation without resetting the wheel, or must we reset and what is an easy way to do this.
        //++ perahps the wheel state before the animation is saved?
        var properties = new Array(null);
        properties[this.animation.propertyName] = this.animation.propertyValue; // Here we set the property to be animated and its value.
        properties['yoyo']       = this.animation.yoyo;     // Set others.
        properties['repeat']     = this.animation.repeat;
        properties['ease']       = this.animation.easing;
        properties['onComplete'] = winwheelStopAnimation;   // This is always set to function outside of this class.
        
        // Do the tween animation passing the properties from the animation object as an array of key => value pairs.
        // Keep reference to the tween object in the wheel as that allows pausing, resuming, and stopping while the animation is still running.
        this.tween = TweenMax.to(this, this.animation.duration, properties);
    }
}

// ==================================================================================================================================================
// Use same function function which needs to be outside the class for the callback when it stops because is finished.
// ==================================================================================================================================================
Winwheel.prototype.stopAnimation = function(callback)
{
    // We can kill the animation using our tween object.
    winwheelToDrawDuringAnimation.tween.kill();
    
    // We should still call the external function to stop the wheel being redrawn even click and also callback any function that is supposed to be.
    winwheelToDrawDuringAnimation = this;
    winwheelStopAnimation(callback);
}

// ==================================================================================================================================================
// Pause animation by telling tween to pause.
// ==================================================================================================================================================
Winwheel.prototype.pauseAnimation = function()
{
    if (this.tween)
    {
        this.tween.pause();
    }
}

// ==================================================================================================================================================
// Resume the animation by telling tween to continue playing it.
// ==================================================================================================================================================
Winwheel.prototype.resumeAnimation = function()
{
    if (this.tween)
    {
        this.tween.play();
    }
}

// ====================================================================================================================
// Called at the beginning of the startAnimation function and computes the values needed to do the animation
// before it starts. This allows the developer to change the animation properties after the wheel has been created
// and have the animation use the new values of the animation properties.
// ====================================================================================================================
Winwheel.prototype.computeAnimation = function()
{   
    if (this.animation)
    {
        // Set the animation parameters for the specified animation type including some sensible defaults if values have not been specified.
        if (this.animation.type == 'spinOngoing')
        {
            // When spinning the rotationAngle is the wheel property which is animated.
            this.animation.propertyName = 'rotationAngle';
            
            if (this.animation.spins == null)
            {
                this.animation.spins = 5;
            }
            
            if (this.animation.repeat == null)
            {
                this.animation.repeat = -1;           // -1 means it will repeat forever.
            }
            
            if (this.animation.easing == null)
            {
                this.animation.easing = 'Linear.easeNone';
            }
            
            if (this.animation.yoyo == null)
            {
                this.animation.yoyo = false;
            }
            
            // We need to calculate the propertyValue and this is the spins * 360 degrees.
            this.animation.propertyValue = (this.animation.spins * 360);
            
            // If the direction is anti-clockwise then make the property value negative.
            if (this.animation.direction == 'anti-clockwise')
            {
                this.animation.propertyValue = (0 - this.animation.propertyValue);
            }
        }
        else if (this.animation.type == 'spinToStop')
        {
            // Spin to stop the rotation angle is affected.
            this.animation.propertyName = 'rotationAngle';
            
            if (this.animation.spins == null)
            {
                this.animation.spins = 5;
            }
            
            if (this.animation.repeat == null)
            {
                this.animation.repeat = 0;        // As this is spin to stop we don't normally want it repeated.
            }
            
            if (this.animation.easing == null)
            {
                this.animation.easing = 'Power4.easeOut';     // This easing is fast start and slows over time.
            }
            
            if (this.animation.stopAngle == null)
            {
                // If the stop angle has not been specified then pick random between 0 and 359.
                this.animation._stopAngle = Math.floor((Math.random() * 359));
            }
            else
            {
                // We need to set the internal to 360 minus what the user entered
                // because the wheel spins past 0 without this it would indicate the
                // prize on the opposite side of the wheel.
                this.animation._stopAngle = (360 - this.animation.stopAngle);
            }
            
            if (this.animation.yoyo == null)
            {
                this.animation.yoyo = false;
            }
            
            // The property value is the spins * 360 then plus or minus the stopAngle depending on if the rotation is clockwise or anti-clockwise.
            this.animation.propertyValue = (this.animation.spins * 360);
            
            if (this.animation.direction == 'anti-clockwise')
            {
                this.animation.propertyValue = (0 - this.animation.propertyValue);
                
                // Also if the value is anti-clockwise we need subtract the stopAngle (but to get the wheel to stop in the correct 
                // place this is 360 minus the stop angle as the wheel is rotating backwards).
                this.animation.propertyValue -= (360 - this.animation._stopAngle);
            }
            else
            {
                // Add the stopAngle to the propertyValue as the wheel must rotate around to this place and stop there.
                this.animation.propertyValue += this.animation._stopAngle;
            }
        }
        else if (this.animation.type == 'spinAndBack')
        {
            // This is basically is a spin for a number of times then the animation reverses and goes back to start.
            // If a repeat is specified then this can be used to make the wheel "rock" left and right.
            
            // Again this is a spin so the rotationAngle the property which is animated.
            this.animation.propertyName = 'rotationAngle';
            
            if (this.animation.spins == null)
            {
                this.animation.spins = 5;
            }
            
            if (this.animation.repeat == null)
            {
                this.animation.repeat = 1;          // This needs to be set to at least 1 in order for the animation to reverse.
            }
            
            if (this.animation.easing == null)
            {
                this.animation.easing = 'Power2.easeInOut';     // This is slow at the start and end and fast in the middle.
            }
            
            if (this.animation.yoyo == null)
            {
                this.animation.yoyo = true;       // This needs to be set to true to have the animation reverse back like a yo-yo.
            }
            
            if (this.animation.stopAngle == null)
            {
                this.animation._stopAngle = 0;
            }
            else
            {
                // We need to set the internal to 360 minus what the user entered
                // because the wheel spins past 0 without this it would indicate the
                // prize on the opposite side of the wheel.
                this.animation._stopAngle = (360 - this.animation.stopAngle);
            }
            
            // The property value is the spins * 360 then plus or minus the stopAngle depending on if the rotation is clockwise or anti-clockwise.
            this.animation.propertyValue = (this.animation.spins * 360);
            
            if (this.animation.direction == 'anti-clockwise')
            {
                this.animation.propertyValue = (0 - this.animation.propertyValue);
                
                // Also if the value is anti-clockwise we need subtract the stopAngle (but to get the wheel to stop in the correct 
                // place this is 360 minus the stop angle as the wheel is rotating backwards).
                this.animation.propertyValue -= (360 - this.animation._stopAngle);
            }
            else
            {
                // Add the stopAngle to the propertyValue as the wheel must rotate around to this place and stop there.
                this.animation.propertyValue += this.animation._stopAngle;
            }
        }
        else if (this.animation.type == 'custom')
        {   
            // Do nothing as all values must be set by the developer in the parameters
            // especially the propertyName and propertyValue.
        }
    }
}

// ====================================================================================================================
// Calculates and returns a random stop angle inside the specified segment number. Value will always be 1 degree inside
// the start and end of the segment to avoid issue with the segment overlap.
// ====================================================================================================================
Winwheel.prototype.getRandomForSegment = function(segmentNumber)
{
    var stopAngle = 0;
    
    if (segmentNumber)
    {
        if (typeof this.segments[segmentNumber] !== 'undefined')
        {
            var startAngle = this.segments[segmentNumber].startAngle;
            var endAngle = this.segments[segmentNumber].endAngle;
            
            var range = (endAngle - startAngle) - 2;
            
            if (range > 0)
            {
                stopAngle = (startAngle + 1 + Math.floor((Math.random() * range)));
            }
           
            //++ At 2 degrees or less the segment is too small.
            //++ throw some sort of error?
        }
        //++ Error?
    }
    //++ Throw error?
    
    return stopAngle;
}

// ====================================================================================================================
// Class for the wheel spinning animation which like a segment becomes a property of the wheel.
// ====================================================================================================================
function Animation(options)
{
    defaultOptions = {
        'type'              : 'spinOngoing',       // For now there are only supported types are spinOngoing (continuous), spinToStop, spinAndBack, custom.
        'direction'         : 'clockwise',         // clockwise or anti-clockwise.
        'propertyName'      : null,                // The name of the winning wheel property to be affected by the animation.
        'propertyValue'     : null,                // The value the property is to be set to at the end of the animation.
        'duration'          : 10,                  // Duration of the animation.
        'yoyo'              : false,               // If the animation is to reverse back again i.e. yo-yo.
        'repeat'            : 0,                   // The number of times the animation is to repeat, -1 will cause it to repeat forever.
        'easing'            : 'power3.easeOut',    // The easing to use for the animation, default is the best for spin to stop. Use Linear.easeNone for no easing.
        'stopAngle'         : null,                // Used for spinning, the angle at which the wheel is to stop.
        'spins'             : null,                // Used for spinning, the number of complete 360 degree rotations the wheel is to do.
        'clearTheCanvas'    : null,                // If set to true the canvas will be cleared before the wheel is re-drawn, false it will not, null the animation will abide by the value of this property for the parent wheel object.
        'callbackFinished'  : null,                // Function to callback when the animation has finished.
        'callbackBefore'    : null,                // Function to callback before the wheel is drawn each animation loop.
        'callbackAfter'     : null                 // Function to callback after the wheel is drawn each animation loop.
    };
   
    // Now loop through the default options and create properties of this class set to the value for 
	// the option passed in if a value was, or if not then set the value of the default.
	for (var key in defaultOptions)
	{
		if ((options != null) && (typeof(options[key]) !== 'undefined'))
			this[key] = options[key];
		else
			this[key] = defaultOptions[key];
	}
    
    // Also loop though the passed in options and add anything specified not part of the class in to it as a property. 
    if (options != null)
    {
        for (var key in options)
        {
            if (typeof(this[key]) === 'undefined')
            {
                this[key] = options[key];
            }
        }
    }
}

// ====================================================================================================================
// Class for segments. When creating a json of options can be passed in.
// ====================================================================================================================
function Segment(options)
{
	// Define default options for segments, most are null so that the global defaults for the wheel
	// are used if the values for a particular segment are not specifically set.
	defaultOptions = {
		'size'              : null, // Leave null for automatic. Valid values are degrees 0-360. Use percentToDegrees function if needed to convert.
        'text'			    : '',   // Default is blank.
        'fillStyle'			: null, // If null for the rest the global default will be used.
		'strokeStyle'		: null,
		'lineWidth'			: null,
		'textFontFamily' 	: null,
		'textFontSize'		: null,
		'textFontWeight'	: null,
		'textOrientation'	: null,
		'textAlignment'	    : null,
		'textDirection'	    : null,
		'textMargin'		: null,
		'textFillStyle'	    : null,
		'textStrokeStyle'	: null,
		'textLineWidth'	    : null
	};

	// Now loop through the default options and create properties of this class set to the value for 
	// the option passed in if a value was, or if not then set the value of the default.
	for (var key in defaultOptions)
	{
		if ((options != null) && (typeof(options[key]) !== 'undefined'))
			this[key] = options[key];
		else
			this[key] = defaultOptions[key];
	}
    
    // Also loop though the passed in options and add anything specified not part of the class in to it as a property. 
    // This allows the developer to easily add properties to segments at construction time.
    if (options != null)
    {
        for (var key in options)
        {
            if (typeof(this[key]) === 'undefined')
            {
                this[key] = options[key];
            }
        }
    }
	
	// There are 2 additional properties which are set by the code, so need to define them here.
	// They are not in the default options because they are not something that should be set by the user,
	// the values are updated every time the updateSegmentSizes() function is called.
	this.startAngle = 0;
	this.endAngle 	= 0;
}

// ====================================================================================================================
// Class that is created as property of the wheel. Draws line from center of the wheel out to edge of canvas to
// indicate where the code thinks the pointer location is. Helpful to get alignment correct esp when using images.
// ====================================================================================================================
function pointerGuide(options)
{
    defaultOptions = {
        'display'     : false,
        'strokeStyle' : 'red',
        'lineWidth'   : 3
    };
   
    // Now loop through the default options and create properties of this class set to the value for 
	// the option passed in if a value was, or if not then set the value of the default.
	for (var key in defaultOptions)
	{
		if ((options != null) && (typeof(options[key]) !== 'undefined'))
        {
			this[key] = options[key];
        }
		else
        {
			this[key] = defaultOptions[key];
        }
	}
}

// ====================================================================================================================
// This function takes the percent 0-100 and returns the number of degrees 0-360 this equates to.
// ====================================================================================================================
function winwheelPercentToDegrees(percentValue)
{
    var degrees = 0;
    
    if ((percentValue > 0) && (percentValue <= 100))
    {
        var divider = (percentValue / 100);
        degrees = (360 * divider);
    }
    
    return degrees;
}

// ====================================================================================================================
// In order for the wheel to be re-drawn during the spin animation the function greesock calls needs to be outside
// of the class as for some reason it errors if try to call winwheel.draw() directly.
// ====================================================================================================================
var winwheelToDrawDuringAnimation = null;  // This global is set by the winwheel class to the wheel object to be re-drawn.

function winwheelAnimationLoop()
{
    if (winwheelToDrawDuringAnimation)
    {
        // If there is a callback function which is supposed to be called before the wheel is drawn then do that.
        if (winwheelToDrawDuringAnimation.animation.callbackBefore != null)
        {
            eval(winwheelToDrawDuringAnimation.animation.callbackBefore);
        }
        
        //++ sort if this is functioning as expected and if so tidy up.
        // Call the function to re-draw the wheel passing in if the canvas is to cleared.
        //if (winwheelToDrawDuringAnimation.animation.clearTheCanvas != null)
        //{
         //   winwheelToDrawDuringAnimation.draw(winwheelToDrawDuringAnimation.animation.clearTheCanvas);
        //}
        //else  
        //{
            winwheelToDrawDuringAnimation.draw();
        //}
        
        // If there is a callback function which is supposed to be called after the wheel has been drawn then do that.
        if (winwheelToDrawDuringAnimation.animation.callbackAfter != null)
        {
            eval(winwheelToDrawDuringAnimation.animation.callbackAfter);
        }
    }
}

// ====================================================================================================================
// This function is called-back when the greensock animation has finished. We remove the event listener to the function 
// above to stop the wheel being re-drawn all the time even though it is not animating as the greensock ticker keeps going.
// ====================================================================================================================
function winwheelStopAnimation(callback)
{   
    // Remove the redraw from the ticker.
    //++ how does it get added to that function?
    TweenLite.ticker.removeEventListener("tick", winwheelAnimationLoop);
    
    // If function to callback when the animation has finished then do it.
    if (callback != false)
    {
        if (winwheelToDrawDuringAnimation.animation.callbackFinished != null)
        {
            eval(winwheelToDrawDuringAnimation.animation.callbackFinished);
        }
    }
}