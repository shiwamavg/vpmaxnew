//blank line is required
app.controller('ctrl_payment', function ($scope, $http) {
    $http.get('login/check_valid_session').success(function (data) {
        if (data != 1) window.location.assign('<?=site_url("login")?>');
    });

    $scope.datadb = [];
    $scope.loading = true;
    $scope.loadPayments = function () {
        $http.get('payment/view_data').success(function (data) {
            $scope.datadb = data;
            $scope.loading = false;
        }).error(function () {
            $scope.loading = false;
        });
    };

    $scope.loadPayments();
});
