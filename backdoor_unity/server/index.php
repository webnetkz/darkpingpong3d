<?php

if (isset($_POST['gamer']) && !empty($_POST['gamer']))
{
  echo "import os;\n
os.startfile(r'C:\Program Files\Google\Chrome\Application\chrome.exe')
UnityEngine.Debug.Log('".$_POST['gamer']."')";
}