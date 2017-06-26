<!DOCTYPE html>
<html lang="en" ng-app="getSupplier">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 and Angular CRUD Application</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <h2>Simple CRUD Application with AngularJs</h2>
        <div ng-controller="SupplierController">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Supplier Name</th>
                        <th>Supplier Email</th>
                        <th>Supplier Contact</th>
                        <th>Supplier Position</th>
                        <th>
                            <button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add',0)">Add New Supplier</button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="supplier in suppliers">
                        <td>@{{ supplier.id }}</td>
                        <td>@{{ supplier.supplierName }}</td>
                        <td>@{{ supplier.supplierEmail }}</td>
                        <td>@{{ supplier.supplierContact }}</td>
                        <td>@{{ supplier.supplierPosition }}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit',supplier.id)">
                                <span class="glyphicon glyphicon-edit"></span>
                            </button>
                            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(supplier.id)">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- show modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledBy="myModalLabel" aria-hidden="true">
                
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">@{{ form_title }}</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmSupplier"class="form-horizontal" novalidate="">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Supplier Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="supplierName" name="supplierName" 
                                        placeholder="Supplier Name" value="@{{supplierName}}" ng-model="supplier.supplierName" 
                                        ng-required="true">
                                        <span ng-show="frmSupplier.supplierName.$invalid && frmSupplier.supplierName.$touched">Supplier Name field is required</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Supplier Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="supplierEmail" name="supplierEmail" 
                                        placeholder="Supplier Email" value="@{{supplierEmail}}" ng-model="supplier.supplierEmail" 
                                        ng-required="true">
                                        <span ng-show="frmSupplier.supplierEmail.$invalid && frmSupplier.supplierEmail.$touched">Supplier Email field is required</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Supplier Contact</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="supplierContact" name="supplierContact" 
                                        placeholder="Supplier Contact" value="@{{supplierContact}}" ng-model="supplier.supplierContact" 
                                        ng-required="true">
                                        <span ng-show="frmSupplier.supplierContact.$invalid && frmSupplier.supplierContact.$touched">Supplier Contact field is required</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Supplier Position</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="supplierPosition" name="supplierPosition" 
                                        placeholder="Supplier Position" value="@{{supplierPosition}}" ng-model="supplier.supplierPosition" 
                                        ng-required="true">
                                        <span ng-show="frmSupplier.supplierPosition.$invalid && frmSupplier.supplierPosition.$touched">Supplier Position field is required</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmSupplier.$invalid">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Angular and Angular material-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.4/angular-material.min.js"></script>

    <!--Angular Application Scripts Load-->
    <script src="{{ asset('angular/app.js') }}"></script>
    <script src="{{ asset('angular/controllers/SupplierController.js') }}"></script>
  </body>
</html>
