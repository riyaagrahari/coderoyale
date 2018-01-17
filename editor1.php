<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
</head>
<body>
<div class="col-sm-8 ace_editor ace-cobalt ace_dark" id="col-sm-8" align="left">
<textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off"
 spellcheck="false" style="opacity: 0; height: 14px; width: 6.59781px; left: 70.3912px; top: 28px;"></textarea>
 <div class="ace_gutter">
 <div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 428px; width: 40px;">
 <div class="ace_gutter-cell " style="height: 14px;">1
 </div>
 <div class="ace_gutter-cell " style="height: 14px;">
 2</div>
 <div class="ace_gutter-cell " style="height: 14px;">
 3</div>
 <div class="ace_gutter-cell " style="height: 14px;">4</div><div class="ace_gutter-cell " style="height: 14px;">
 5</div></div>
 <div class="ace_gutter-active-line" style="top: 28px; height: 14px;">
 </div></div>
 <div class="ace_scroller" style="left: 40px; right: 0px; bottom: 0px;">
 <div class="ace_content" style="margin-top: 0px; width: 720px; height: 428px; margin-left: 0px;">
 <div class="ace_layer ace_print-margin-layer">
 <div class="ace_print-margin" style="left: 531.825px; visibility: visible;"></div></div>
 <div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:14px;top:28px;left:0;right:0;"></div></div>
 <div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:14px"></div>
 <div class="ace_line" style="height:14px">    </div><div class="ace_line" style="height:14px">   
 </div>
 <div class="ace_line" style="height:14px"></div><div class="ace_line" style="height:14px">   
 </div></div>
 <div class="ace_layer ace_marker-layer">
 </div>
 <div class="ace_layer ace_cursor-layer ace_hidden-cursors">
 <div class="ace_cursor" style="left: 30.3912px; top: 28px; width: 6.59781px; height: 14px;">
 </div></div></div></div>
 <div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 22px; bottom: 0px;">
 <div class="ace_scrollbar-inner" style="width: 22px; height: 70px;"></div></div>
 <div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 40px; right: 0px;">
 <div class="ace_scrollbar-inner" style="height: 22px; width: 760px;"></div></div>
 <div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; 
 font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: hidden;">
 <div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; 
 font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">
 </div>
 <div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit;
 font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">
 XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>
 <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        
    var editor = ace.edit("col-sm-8");
    editor.setTheme("ace/theme/cobalt");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.getSession().on('change', function () {
      document.getElementById("txtarea5").value= editor.getSession().getValue(); 
 
   });

   document.getElementById("txtarea5").value=editor.getSession().getValue();
    
</script>

<script>
function show_alert() {
    document.getElementById("txtarea5").value= editor.getSession().getValue(); 

</script>
</body>
</html>