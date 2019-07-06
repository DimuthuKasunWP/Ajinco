<!-- <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Landbot | Convert a Landing Page into a Chatbot</title>
  </head>
  <body>
    <script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
    <script>
      var myLandbot = new LandbotFullpage({
        index: 'https://landbot.io/u/H-198329-MDFF46HA20DPC4KJ/index.html',
      });
    </script>
  </body>
</html> -->

<script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
<script>
  var myLandbot = new LandbotLivechat({
    index: 'https://landbot.io/u/H-198329-MDFF46HA20DPC4KJ/index.html',
  });
</script><script>
  // Show a proactive message on landbot load
  myLandbot.on('landbot-load', () => {
    myLandbot.sendProactive("");
  });
</script>