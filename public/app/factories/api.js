app.factory('ApiFactory', function($http, API_URL) {
    return {
        getArticles: function() {
            return $http.get(API_URL + 'articles');
        }
    };
});
