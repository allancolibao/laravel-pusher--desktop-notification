    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true

    var pusher = new Pusher('fc98acd05f950b81a9f2', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('sender');
    channel.bind('App\\Events\\adminNotif', function(data) {
      
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
    }

    // Let's check if the user is okay to get some notification
    else if (Notification.permission === "granted") {
    
    // If it's okay let's create a notification
    var options = {
        body: "Someone sending email via eSender",
        icon: "img/sender.png",
        dir : "ltr"
    };

    var notification = new Notification("eSender 2019",options);
        notification.onclick = function() {
        window.open("https://mail.google.com/mail");
    };
    }  

    else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // Whatever the user answers, we make sure we store the information
      if (!('permission' in Notification)) {
        Notification.permission = permission;
      }

      // If the user is okay, let's create a notification
      if (permission === "granted") {
    var options = {
        body: "Someone sending email via eSender",
        icon: "img/sender.png",
        dir : "ltr"
    };
    var notification = new Notification("eSender",options);
        notification.onclick = function() {
        window.open("https://mail.google.com/mail");
    };
    }
    });
    }
    });