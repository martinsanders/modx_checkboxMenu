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
      'guid' => 'cbe59e9e4ab0844c6da8ad84d0b4b282',
      'native_key' => 'checkboxmenu',
      'filename' => 'modNamespace/0e34aa1c89a211192d2d225f81906ce2.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'e1011481d40b74394faf27a2ed75eff4',
      'native_key' => 1,
      'filename' => 'modCategory/ee08f760a81b247c41b6b03f9fc4e50d.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '296e6a5189ee39ea06c2e41ac3d94cf8',
      'native_key' => '296e6a5189ee39ea06c2e41ac3d94cf8',
      'filename' => 'xPDOTransportVehicle/a210e350b7971b95a2f61701ce6d4654.vehicle',
      'namespace' => 'checkboxmenu',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => 'e87597bb2e8d416db232d0671bfbada9',
      'native_key' => 'e87597bb2e8d416db232d0671bfbada9',
      'filename' => 'xPDOTransportVehicle/bc9eb4188ff0a0f716ddc949236fce83.vehicle',
      'namespace' => 'checkboxmenu',
    ),
  ),
);