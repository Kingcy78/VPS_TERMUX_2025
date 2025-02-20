<?php
shell_exec("vncserver :1");
shell_exec("websockify --web=/usr/share/novnc/ 6080 localhost:5901 > /dev/null 2>&1 &");
echo "NoVNC started at <a href='http://localhost:6080/vnc.html'>localhost:6080</a>";
?>
