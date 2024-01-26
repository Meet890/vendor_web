<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #admin-panel {
  display: grid;
  grid-template-columns: 200px auto;
  grid-template-rows: 50px auto;
  grid-template-areas:
    "nav nav"
    "sidebar main";
}

#nav {
  grid-area: nav;
  background-color: lightblue;
}

#main {
  grid-area: main;
  background-color: lightgreen;
}

#sidebar {
  grid-area: sidebar;
  background-color: lightyellow;
}
    </style>
</head>
<body>
<div id="admin-panel">
  <div id="nav">
    Navigation
  </div>
  <div id="main">
    Main Content
  </div>
  <div id="sidebar">
    Sidebar
  </div>
</div>
<script>
    // Adjust layout based on device width
if (window.innerWidth < 768) {
  // Phone layout
  document.getElementById("admin-panel").style.gridTemplateColumns = "1fr";
  document.getElementById("admin-panel").style.gridTemplateRows = "50px 200px auto";
  document.getElementById("admin-panel").style.gridTemplateAreas = `
    "nav"
    "sidebar"
    "main"
  `;
}
</script>
</body>
</html>