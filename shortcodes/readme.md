# Shortcodes 2222

## [align-center]
  ### Description:
    Aligns the content vertically center within itself
  
  ### att:
    -pad-l: Padding to add to the left (i.e. pad-l="15")
    -Type: The HTML element to use (default: p)
    -strip-p: Set to "false" to keep auto-generated "<p>" tags (default: true)
    
  ### Usage:
    [align-center pad-l="15"](some image) some text to be aligned in the center of the image[/align-center]

## [big]
  ### Description: 
    Create text that is a different font size.

  ### att:
    -size: the font size to be entered for the text (try not to use this too often, as it sets inline-style (non-cacheable).
  
  ### usage:
    [big size="2rem"]Big text![/big]

---

## [center]
  ### Description:
    Center some text
    
  ### att:
    -Type: Change the HTML element being used (default: "p")
    
  ### Usage:
    [center]Your text to be centered goes here[/center]
    
---

## [google-map]
  ### Description:
    Displays a Google Map. Set up the API key (required) and icon (optional) in theme options first.
    
  ### Att:
    -lat: the latitude
    -long: the longitude
    
  ### Usage:
    [google-map lat="LATNUM" long="LONGNUM"]
    
---

## [grey-bg]
  ### Description:
     Adds a grey background to the content (as specified in the style guide for the default grey)
     
  ### Att:
    -pad-t: Set a padding top (i.e. pad-t="15").
    -pad-b: Set a padding top (i.e. pad-b="15").
    -strip-p: Set to false to keep auto-generated "<p>" tags (defaults to "true").
    -type: The HTML element to use (default: "div") .
    
  ### Usage:
    [highlight-bg pad-t="15" pad-b="10"]

      Your text here (may be formatted, i.e. "header", in WYSIWYG editor)
      [your-shortcode-here]

    [/highlight-bg]
    
---

## [half-items]
  ### Description: 
    Create content that goes side-by-side in desktop, and stacks on top for mobile.

  ### att:
    -show-p: Can be set to anything. Standard practice to use "true". If set, <p> tags will be displayed. It is useful to set this if the content will be text. If it is something else, such as a list, it may be best to set it.

  ### usage:
      [half-items][half]
      Test
      Test
      [/half][half]
      [my-shortcode]
      [/half][/half-items]
      
---

## [highlight]
  ### Description:
    Sets the text within this shortcode to be the primary colour of the website

---

## [nowrap]
  ### Description:
    The text within this shortcode will not wrap. Useful if you need text to always display on a single line. Be careful, as this can cause issues on mobile if the text is too long

---

## [social-media]
  ### Description
    Displays a list of social media icons, with links. Set up in theme settings first.
    
  ### atts:
    -pad-l: Padding to add to the left (i.e. pad-l="15")
    
  ### usage:
    [social-media pad-l="15"]

## [quote]
  ### Description:
    Create a quote.

  ### att:
    -author: The author of the quote
  
  ### Usage: 
    [quote author="Jordan Webdev"]This is a quote![/quote]

# *** Requests ***

(please follow the above format for new requests)

Example:

## [sample-shortcode]
  ### Description:
    This is what it does

  ### Att:
    -sample-attribute-1: What the attribute does + any options for the attribute (if more than one option)
    -sample-attribute-2: What the attribute does + any options for the attribute (if more than one option)

  ### Usage:
    [sample-shortcode sample-attribute-1="value for sample attribute"]My Sample text[/sample-shortcode]
