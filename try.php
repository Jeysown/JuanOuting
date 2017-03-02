<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    .progress {
      margin: auto;
      padding: 0;
      overflow: hidden;
      border-radius: 10px;
    }
    .progress a {
      color: white;
      text-decoration: none;
    }
    .progress em {
      display: block;
      font-size: 1.1em;
      font-weight: bold;

    }

    .progress li {
      float: left;
      margin-left: 0;
      width: 150px;
      height: 70px;
      list-style-type: none;
      padding: 5px 5px 5px 30px;
      border-right: 3px solid white;
      position: relative;
      cursor: pointer;
    }

    .progress li:first-child {
      padding-left: 5px;
    }

    .progress li:nth-child(n+2)::before {
      position: absolute;
      top:0;
      left:0;
      display: block;
      border-left: 25px solid white;
      border-top: 40px solid transparent;
      border-bottom: 40px solid transparent;
      width: 0;
      height: 0;
      content: " ";
    }

    .progress li::after {
      z-index: 1;
      position: absolute;
      top: 0;
      right: -25px;
      display: block;
      border-left: 25px solid #41A4F0;
      border-top: 40px solid transparent;
      border-bottom: 40px solid transparent;
      width:0;
      height:0;
      content: " ";
    }
    .progress li:nth-child(5)::after{
      border-top: 40px solid #b1b1b1;
      border-bottom: 40px solid #b1b1b1;
    }


    .progress li { background-color: #41A4F0; }
    .progress li::after { border-left-color: #41A4F0; }

    .progress li.current { background-color: #1C91E9; }
    .progress li.current::after {
      border-left-color: #1C91E9;
        }
        .progress li:nth-child(5).current::after{
          border-top-color:#1C91E9;
            border-bottom-color: #1C91E9;
        }
    .progress li.current ~ li { background-color: #b1b1b1; }
    .progress li.current ~ li::after { border-left-color: #b1b1b1; }

    .progress li:hover {background-color: #01579B}
    .progress li:hover::after {border-left-color: #01579B; }
    .progress li.current:hover {background-color: #1C91E9;}
    .progress li.current:hover::after {border-left-color: #1C91E9; }

    </style>
  </head>
  <body>

<div style="text-align: center">
<div style="display: inline-block;">
    <ul class="progress">
      <li><a href="#" title=""><em>Step 1: </em><span>pogi mo jason</span></a></li>
      <li><a href="#" title=""><em>Step 2: </em><span>pogi mo jason</span></a></li>
        <li class="current"><a href="#" title=""><em>Step 3: </em><span>pogi mo jason</span></a></li>
      <li > <a href="#" title=""><em>Step 4: </em><span>pogi mo jason</span></a></li>
      <li ><a href="#" title=""><em>Step 5: </em><span>pogi mo jason</span></a></li>
    </ul>
  </div>
  </div>

  </body>
</html>
