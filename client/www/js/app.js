(function(){
    'use strict';
    var app = angular.module('cosPad', ['onsen.directives']);

    // テストデータ
    app.factory('Data', function() {
        var Data = {};
        Data.items = ['aa', 'bb', 'cc'];
        return Data;
    });

    // インデックスページ
    app.controller('Index2', function($scope, Data) {
        console.log($scope, Data, "index");

        $scope.requestTest = function (e) {
            console.log('Index / requestTest');

            // post query data
            var param = {
                post_type: 'post',
                post_status: 'draft',
                post_title: 'sample post',
                post_author: 1,
                post_excerpt: '',
                post_content: 'サンプルです。',
                post_format: ''
            };

            var dfd = $.ajax({
                type: 'POST',
                url: url,
                data: param
            });

            dfd.done(function (data) {
                console.log(data);
            });
        };

    });

    app.controller('page2-3', function($scope, Data) {

		console.log("hello!");
		$('#ui-tab > ul').tabs();

	});

    // Page 1
    app.controller('Page1Ctrl', function($scope, Data) {
        console.log($scope, Data, "Page1Ctrl");

        $scope.items = Data.items;

        $scope.next = function(index) {
            Data.index = index;
            var item = Data.items[index];
            $scope.ons.navigator.pushPage('page2.html', {title: item});
        };
    });

    // Page 2
    app.controller('Page2Ctrl', function($scope, Data) {
        console.log($scope, Data, "Page2Ctrl");

        $scope.item = Data.items[Data.index];

        $scope.save = function() {
            Data.items[Data.index] = $scope.item;
            $scope.ons.navigator.popPage();
        };
    });
})();
