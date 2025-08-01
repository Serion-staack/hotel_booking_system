<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Create Real Time Notification in Laravel 10 using Pusher - Techsolutionstuff</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">How to Create Real Time Notification in Laravel 10 using Pusher - Techsolutionstuff</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-notifications">
                    <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                        <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
                    </a>

                    <div class="dropdown-container">
                        <div class="dropdown-toolbar">
                            <div class="dropdown-toolbar-actions">
                                <a href="#">Mark all as read</a>
                            </div>
                            <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                        </div>
                        <ul class="dropdown-menu">
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Friends</a></li>
            </ul>
        </div>
    </div>
</nav>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    let notificationsWrapper   = $('.dropdown-notifications');
    let notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    let notificationsCountElem = notificationsToggle.find('i[data-count]');
    let notificationsCount     = parseInt(notificationsCountElem.data('count'));
    let notifications          = notificationsWrapper.find('ul.dropdown-menu');

    if (notificationsCount <= 0) {
        notificationsWrapper.hide();
    }



    var pusher = new Pusher('6188344de4c17dfecdb8', {
        cluster:'us2',
        encrypted: true
    });


    var channel = pusher.subscribe('status-liked');


    channel.bind('status-liked', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
		  <li class="notification active">
			  <div class="media">
				<div class="media-left">
				  <div class="media-object">
					<img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
				  </div>
				</div>
				<div class="media-body">
				  <strong class="notification-title">`+data.message+`</strong>
				  <!--p class="notification-desc">Extra description can go here</p-->
				  <div class="notification-meta">
					<small class="timestamp">about a minute ago</small>
				  </div>
				</div>
			  </div>
		  </li>
		`;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
    });
</script>
</body>
</html>
