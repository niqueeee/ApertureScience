# ApertureScience
A project originally for a friend, inspired by the game "Portal". 

Assuming you have correctly installed the following:
  - PHP 7.0 (or higher)
  - Apache 2.4
  - phpmyadmin
  
  We can now proceed.
  
  <b>Step 1</b>: Go to Windows PowerShell (Admin). <br/>
  <b>Step 2</b>: Go to your Apache folder > bin folder. <br />
  <b>Step 3</b>: type "httpd -k start" or ".\httpd -k start" to start Apache. Then you're good to go. <br /><br />
          <b><u>If you have encountered the following error:</u></b>
          
          (OS 10048)Only one usage of each socket address (protocol/network address/port) is normally permitted.  : AH00072: make_sock:             could not bind to address [::]:80
          (OS 10048)Only one usage of each socket address (protocol/network address/port) is normally permitted.  : AH00072: make_sock:             could not bind to address 0.0.0.0:80
          AH00451: no listening sockets available, shutting down
          AH00015: Unable to open logs
          
<br />Type "<b>net stop was /y</b>". This would shut down the Windows Process Activation Service, stop it from using port 80. We will use this specific port to run Apache.


====== D I R E C T O R Y ======

  - aperture/<b>register.php</b> = SIGN UP/SIGN IN.
  - aperture/<b>sample.php</b> = ADMIN DASHBOARD.
  - to be continued...
