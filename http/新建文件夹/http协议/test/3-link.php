<?php
header('Content-Type: application/javascript');
echo " var box = document.querySelector('.box')
    box.onmouseover = function () {
      this.style.width = '200px'
    }
    box.onmouseout = function () {
      this.style.width = '100px'
    }";
