<!DOCTYPE html>
<html>

<head>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>

<body>
<h2>AngularJS Tutorial</h2>
<div data-ng-app="" data-ng-init="names=['Jani','Hege','Kai']">
  <p>Looping with ng-repeat:</p>
  <ul>
    <li data-ng-repeat="x in names">
      {{ x }}
    </li>
  </ul>
</div>

</body>
</html>