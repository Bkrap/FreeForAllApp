 <?php
 
// os and user 
function os() {
    $what = 
    '<div class="text-align-center">' .
    '<div class="ml-3 mb-4"><b>Owner </b><br>' .  
                shell_exec('wmic os get registereduser') .
      '</div>' . 
      '<div class="ml-3 mb-4"><b>OS Info</b><br>' .  
      shell_exec('systeminfo | findstr /C:"OS Name"') .
        '</div>' . 
      '<div class="ml-3 mb-4">' .  
                shell_exec('wmic os get serialnumber') . 
        '</div>' .
       '<div class="ml-3 mb-4">' . 
                shell_exec('wmic os get TotalVirtualMemorySize') . 
        '</div>' .
        '<div class="ml-3 mb-4">' .  
                shell_exec('wmic os get OSProductSuite') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
         shell_exec('wmic os get OSArchitecture') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
              shell_exec('wmic os get encryptionlevel') .
        '</div>' .
        '<div class="ml-3 mb-4">' .  
        shell_exec('wmic os get name') .
        '</div>' .
        '<div class="ml-3 mb-4"><b>Motherboard </b><br>' .  
        shell_exec('wmic bios get manufacturer') .
        '</div>' .
        '<div class="ml-3 mb-4">' .  
        shell_exec('wmic baseboard get product') .
        '</div>' .
        '<div class="ml-3 mb-4"><b>BIOS Version </b><br>' .  
        shell_exec('wmic bios get name') .
        '</div>' .
    '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
  }

/***********************************************************************/

 // processor details 
  function proc() {
    $what = 
     '<div class="text-align-center">' .
        '<div class="ml-3 mb-4">' .  
                    shell_exec('wmic cpu get name') .
          '</div>' . 
          '<div class="ml-3 mb-4">' .  
                    shell_exec('wmic cpu get architecture') . 
            '</div>' .
           '<div class="ml-3 mb-4">' . 
                    shell_exec('wmic cpu get maxclockspeed') . 
            '</div>' .
            '<div class="ml-3 mb-4">' .  
                    shell_exec('wmic cpu get processorid') .
             '</div>' .
             '<div class="ml-3 mb-4">' .  
             shell_exec('wmic cpu get addresswidth') .
             '</div>' .
             '<div class="ml-3 mb-4">' .  
                  shell_exec('wmic cpu get currentvoltage') .
            '</div>' .
            '<div class="ml-3 mb-4">' .  
            shell_exec('wmic cpu get status') .
            '</div>' .
        '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
  }
/***********************************************************************/

  
//graphics info  
  function graph() {
  
    $what = 
            '<div class="text-align-center">' .
                '<div class="ml-3 mb-4">' .  
                            shell_exec('wmic path win32_VideoController get name') .
                  '</div>' . 
                  '<div class="ml-3 mb-4">' .  
                             shell_exec('wmic path win32_VideoController get CurrentRefreshRate') .
                    '</div>' .
                   '<div class="ml-3 mb-4">' . 
                               shell_exec('wmic path win32_VideoController get VideoModeDescription') .
                    '</div>' .
                    '<div class="ml-3 mb-4">' .  
                               shell_exec('wmic path win32_VideoController get VideoProcessor') .
                     '</div>' .
                     '<div class="ml-3 mb-4">' .  
                     shell_exec('wmic path win32_VideoController get VideoMemoryType') .
                      '</div>' .
                      '<div class="ml-3 mb-4">' .  
                      shell_exec('wmic path win32_VideoController get status') .
                      '</div>' .
                      '<div class="ml-3 mb-4">' .  
                         shell_exec('wmic path win32_VideoController get adapterram') .
                      '</div>' .
                      '<div class="ml-3 mb-4">' .  
                         shell_exec('wmic path win32_VideoController get adapterdactype') .
                      '</div>' .
                      '<div class="ml-3 mb-4">' .  
                         shell_exec('wmic path win32_VideoController get adaptercompatibility') .
                      '</div>' .
                  '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
    
  }
/***********************************************************************/


//network details WiFi pass   
  function net() {
  
    $what = 
    '<div class="text-align-center">' .
       '<div class="ml-3 mb-4">' . 
                   shell_exec('NETSH WLAN SHOW PROFILE WIFI KEY=CLEAR') .
        '</div>' .
        '<div class="ml-3 mb-4">' .  
                   shell_exec('wmic nic get macaddress | findstr ') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
         shell_exec('nslookup myip.opendns.com resolver1.opendns.com') .
          '</div>' .
      '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
    
  }
/***********************************************************************/
  
// ram memory  
  function ram() {
  
    $what = 
    '<div class="text-align-center">' .
    '<div class="ml-3 mb-4">' .  
                shell_exec('wmic MEMORYCHIP get BankLabel') .
      '</div>' . 
      '<div class="ml-3 mb-4">' .  
                shell_exec('wmic MEMORYCHIP get DeviceLocator') . 
        '</div>' .
       '<div class="ml-3 mb-4">' . 
                shell_exec('wmic MEMORYCHIP get Capacity') . 
        '</div>' .
        '<div class="ml-3 mb-4">' .  
                shell_exec('wmic MEMORYCHIP get Speed') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
         shell_exec('wmic MEMORYCHIP get manufacturer') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
         shell_exec('wmic MEMORYCHIP get statusinfo') .
         '</div>' .
    '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
    
  }
/***********************************************************************/
  
//hard disk / ssd
  function disk() {
  
    $what = 
    '<div class="text-align-center">' .
    '<div class="ml-3 mb-4">' .  
                shell_exec('wmic diskdrive get model') .
      '</div>' . 
      '<div class="ml-3 mb-4">' .  
                 shell_exec('wmic diskdrive get index') .
        '</div>' .
       '<div class="ml-3 mb-4">' . 
                   shell_exec('wmic diskdrive get firmwareRevision') .
        '</div>' .
        '<div class="ml-3 mb-4">' .  
                   shell_exec('wmic diskdrive get status') .
         '</div>' .
         '<div class="ml-3 mb-4">' .  
         shell_exec('wmic diskdrive get interfacetype') .
          '</div>' .
          '<div class="ml-3 mb-4">' .  
          shell_exec('wmic diskdrive get totalheads') .
          '</div>' .
          '<div class="ml-3 mb-4">' .  
             shell_exec('wmic diskdrive get totaltracks') .
          '</div>' .
          '<div class="ml-3 mb-4">' .  
             shell_exec('wmic diskdrive get totalcylinders') .
          '</div>' .
          '<div class="ml-3 mb-4">' .  
             shell_exec('wmic diskdrive get totalSectors') .
          '</div>' .
          '<div class="ml-3 mb-4">' .  
          shell_exec('wmic diskdrive get partitions') .
       '</div>' .
        '<div class="ml-3 mb-4">' .  
           shell_exec('wmic diskdrive get size') .
       '</div>' .
      '</div>';
  
   // $filter = preg_match('#os#', $what, )
  
    echo $what;
    
  }
/***********************************************************************/


  //public ip address
  function get_client_ip() {
    $s = shell_exec('nslookup myip.opendns.com resolver1.opendns.com |findstr /C:"Address:"');
  
    return $s;
  }
/***********************************************************************/
  

  //Get location
  function get_loc() {
  
  $string = get_client_ip();
  $string = str_replace(' ', '', $string);
  $string = (explode(":", $string));
  
  $ip = $string[2];
  
  $loc = 'curl ipinfo.io/' . $ip;
  
  $get_loc = shell_exec($loc);

    $get_loc = str_replace('"', '', $get_loc);
    $get_loc = str_replace(',', '<br>', $get_loc);
    $get_loc = str_replace('{', '', $get_loc);
    $get_loc = str_replace('}', '', $get_loc);


  return $get_loc;
   
  }
/***********************************************************************/

  //debugger
  function myErr($s){
    echo '<pre>';
    print_r($s);
    echo '</pre>';
    }
// Function to get the client IP address


// Get latitude and longitude
$get_loc = get_loc();

$coo = (explode(':', $get_loc));
$coo2 = substr_replace($coo[6], '#', 8, 0);
$coo3 = (explode('#', $coo2));

//myErr($coo);
//myErr($coo2);
//myErr($coo3);

$lng = preg_match_all('!\d+!', $coo3[1], $matches);
//myErr($matches);

foreach($matches as $k => $v){
 // myErr($v);
}

$lng = implode('.', $v);

$lat = $coo3[0];

// echo $lat;
// echo $lng;
