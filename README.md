# YSE Paragraphs Promoter

## Pair paragraphs library items with a dedicated node for use in Content contexts.

This module looks for a thirdparty setting by paragraphs type for types that allow promoting to library items.   If found, upon promotion from an entity reference revisions field in a node, this module creates a ReusableItem node.  That node gets the library item as its main content and stores some metadata, such as the node from which the paragraph was promoted.

The goal is to be able to use paragraphs library items in entity reference fields.  As of Sept 2024, the dynamic entity reference field type is not supported by Entity Share.  We create these wrapper nodes to allow items to be used in Cards, sliders, etc. beside node-based entities.
