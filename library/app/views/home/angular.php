<div ng-app="" ng-controller="personController">

    First Name: <input type="text" ng-model="firstName"><br>
    Last Name: <input type="text" ng-model="lastName"><br>
    <br>
    Full Name: {{firstName + " " + lastName}}

</div>

<script>
    function personController($scope) {
        $scope.firstName="Firstname",
        $scope.lastName="Lastname"
    }
</script>