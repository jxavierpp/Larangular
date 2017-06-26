var app = angular.module('getSupplier',[])
        .constant('API_URL','http://blog.dev/api/');

app.constant("CSRF_TOKEN", '{{ csrf_token() }}');