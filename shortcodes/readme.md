# Shortcodes

## [big]
  ### Description: 
    Create text that is a different font size.

  ### att:
    -size: the font size to be entered for the text (try not to use this too often, as it sets inline-style (non-cacheable)
  
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

## [half-items]
  ### Description: 
    Create content that goes side-by-side in desktop, and stacks on top for mobile.

  ### att:
    -show-p: Can be set to anything. Standard practice to use "true". If set, <p> tags will be displayed. It is useful to set this if the content will be text. If it is something else, such as a list, it may be best to set it.

  ### usage:
    #### Without embedded shortcodes:
      [half-items][half]
      Test
      Test
      [/half][half]
      Test
      Test
      [/half][/half-items]
      
    #### With embedded shortcodes:
      [half-items][half]
      Test
      Test
      [/half][half-shortcode]
      [my-shortcode]
      [/half-shortcode][/half-items]

---

## [highlight]
  ### Description:
    Sets the text within this shortcode to be the primary colour of the website

---

## [nowrap]
  ### Description:
    The text within this shortcode will not wrap. Useful if you need text to always display on a single line. Be careful, as this can cause issues on mobile if the text is too long

---

## [quote]
  Description:
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
