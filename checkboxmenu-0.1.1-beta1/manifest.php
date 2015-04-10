<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => '# checkboxMenu

Title: checkboxMenu
Version: 0.1.1
By: Martin Sanders.

Create a menu from checkbox values within MODX CMS, requires "get" and "getResources" plugins.


## Setup:

Add new TV with the following settings:

### General Info
Name: 		checkboxMenu
Caption: 	Tags

### Input Options
Input Type:	Checkbox
Input Options:	Print||Branding||Web||Photography

### Input Options
Output Type: Delimiter
Delimiter:  

### Template Access
checkboxMenu.Child:	Check access


## Examples:

### Show Menu List:

[[!checkboxMenu? 
	&outerClass=`` 
	&tv=`[[*checkboxMenu]]` 
	&target=`[[*parent]]`
]]

Key			Value
outerClass	CSS classes
tv  		MODX TV, checkboxMenu
target		ID of resource to used to display related resource

### Show Related Resources:

[[!getResources?
	&parents=`[[*id]]`
	&tpl=`checboxMenuRowTpl`
	&includeTVs=`1`
	&processTVs=`1`
	&tvPrefix=``
	&limit=`0`
	&tvFilters=`checkboxMenu==%[[!get? &if=`tag` &returnValue=`1`]]%`
]]

http://rtfm.modx.com/extras/revo/getresources',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'd116d590c6fc354211620657583351ec',
      'native_key' => 'checkboxmenu',
      'filename' => 'modNamespace/3037433679f81d30c414a7237fda16d5.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ade8061c862732308ac7a01d3d8bb745',
      'native_key' => 1,
      'filename' => 'modCategory/e50e5690585889c86c363b0fdeb0b716.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '6c6c4052403da60013f99b2761f6de60',
      'native_key' => '6c6c4052403da60013f99b2761f6de60',
      'filename' => 'xPDOTransportVehicle/3e8a7da36408e162509ca361f7aab851.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'c00f8caaf9bed3bb51489d6b6d46d4f6',
      'native_key' => 'c00f8caaf9bed3bb51489d6b6d46d4f6',
      'filename' => 'xPDOTransportVehicle/360db922b405fd3c8c336ab9bfeabf3e.vehicle',
      'namespace' => 'checkboxmenu',
    ),
  ),
);