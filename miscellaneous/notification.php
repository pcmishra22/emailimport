<script>
// request permission on page load
document.addEventListener('DOMContentLoaded', function() {
 if (!Notification) {
  alert('Desktop notifications not available in your browser. Try Chromium.');
  return;
 }

 if (Notification.permission !== 'granted')
  Notification.requestPermission();
});


function notifyMe() {
 if (Notification.permission !== 'granted')
  Notification.requestPermission();
 else {
  var notification = new Notification('Notification title', {
   icon: 'https://www.upwork.com/profile-portraits/c1WhtcsslH75GNl6AGghf6DE7JQO4TX-5TzYdArtX2v2qGQQxBxe-bHzhYd1gZXX4n',
   body: 'Hey there! You\'ve been notified!',
  });
  notification.onclick = function() {
   window.open('https://www.upwork.com/o/profiles/users/_~015b4b13f1459cfb5f/');
  };
 }
}
</script>
 <button onclick="notifyMe()">Notify me!</button>
