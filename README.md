# checkboxMenu

Create a menu from checkbox values within MODX CMS, requires "get" and "getResources" plugins.


## Setup:

Add new TV with the following settings:

### General Info
Name: 		**checkboxMenu**

Caption: 	**Tags**

### Input Options
Input Type:	**Checkbox**

Input Options:	**Print||Branding||Web||Photography**

### Input Options
Output Type: **Delimiter**

Delimiter:  

### Template Access
checkboxMenu.Child:	**Check access**


## Examples:

### Show Menu List:
```
[[!checkboxMenu? 
	&outerClass=`` 
	&tv=`[[*checkboxMenu]]` 
	&target=`[[*parent]]`
]]
```
Key  |			Value
:----|:----------
outerClass | CSS classes
tv | MODX TV, checkboxMenu
target | ID of resource to used to display related resource

### Show Related Resources:
```
[[!getResources?
	&parents=`[[*id]]`
	&tpl=`checboxMenuRowTpl`
	&includeTVs=`1`
	&processTVs=`1`
	&tvPrefix=``
	&limit=`0`
	&tvFilters=`checkboxMenu==%[[!get? &if=`tag` &returnValue=`1`]]%`
]]
```
http://rtfm.modx.com/extras/revo/getresources
