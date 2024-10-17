# YSE Paragraphs Promoter

## Pair paragraphs library items with a dedicated node for use in Content contexts.

This module looks for a thirdparty setting by paragraphs type for types that allow promoting to library items.   If found, upon promotion from an entity reference revisions field in a node, this module creates a ReusableItem node.  That node gets the library item as its main content and stores some metadata, such as the node from which the paragraph was promoted.

The goal is to be able to use paragraphs library items in entity reference fields.  As of Sept 2024, the dynamic entity reference field type is not supported by Entity Share.  We create these wrapper nodes to allow items to be used in Cards, sliders, etc. beside node-based entities.

## v2

The 2.o series represents the additional libitems base field approach and removing the promoter_nref from the yse_reusable_node.

## NOTE

the final rendering may depend on yse_jumper preprocessing on the libitem parcel paragraph, you are encouraged to run both!

## TODO

- Make an action where a Resuable Item node can be generated from any library item regardless of default third-party setting.
- The Promoter field is set when a paragraph is promoted from within a node form.  We may allow the promoter base field to be populated from the Paragraphs content list for empty items, and then edits could be made as well if the promoter node needs to change, through a form viewmode.  To keep it clean, maybe create a new action in the libitems/paragraphs content dropbutton.  We want to keep this out of the node forms, they are too busy already.
