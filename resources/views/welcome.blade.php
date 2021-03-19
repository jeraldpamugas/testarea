<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/nestable.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dd" id="nestable_list_1">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">test1
                                <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class="itemIcon fa fa-trash-o"></i>
                                </a>
                                <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-edit'></i>
                                </a>
                                <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-plus'></i>
                                </a>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">test2
                                        <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class="itemIcon fa fa-trash-o"></i>
                                        </a>
                                        <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-edit'></i>
                                        </a>
                                        <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-plus'></i>
                                        </a>
                                    </div>
                                    <ol class="dd-list">
                                        <li id="test3" class="dd-item" data-id="3">
                                            <div class="dd-handle">test3
                                                <a title="Delete"
                                                    class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                                    href="javascript:void(0)">
                                                    <i class="itemIcon fa fa-trash-o"></i>
                                                </a>
                                                <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                                    href="javascript:void(0)">
                                                    <i class='itemIcon fa fa-edit'></i>
                                                </a>
                                                <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                                    href="javascript:void(0)">
                                                    <i class='itemIcon fa fa-plus'></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="4">
                            <div class="dd-handle">test4
                                <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class="itemIcon fa fa-trash-o"></i>
                                </a>
                                <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-edit'></i>
                                </a>
                                <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-plus'></i>
                                </a>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">test5
                                        <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class="itemIcon fa fa-trash-o"></i>
                                        </a>
                                        <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-edit'></i>
                                        </a>
                                        <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-plus'></i>
                                        </a>
                                    </div>
                                </li>
                            </ol>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="6">
                                    <div class="dd-handle">test6
                                        <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class="itemIcon fa fa-trash-o"></i>
                                        </a>
                                        <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-edit'></i>
                                        </a>
                                        <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                            href="javascript:void(0)">
                                            <i class='itemIcon fa fa-plus'></i>
                                        </a>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="7">
                            <div class="dd-handle">test7
                                <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class="itemIcon fa fa-trash-o"></i>
                                </a>
                                <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-edit'></i>
                                </a>
                                <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-plus'></i>
                                </a>
                            </div>
                        </li>
                        <li class="dd-item" data-id="8">
                            <div class="dd-handle">test8
                                <a title="Delete" class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class="itemIcon fa fa-trash-o"></i>
                                </a>
                                <a title="Edit" class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-edit'></i>
                                </a>
                                <a title="Add" class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                    href="javascript:void(0)">
                                    <i class='itemIcon fa fa-plus'></i>
                                </a>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.nestable.js') }}"></script>

    <script type="application/javascript">
        $(document).ready(() => {

            $("#nestable_list_1").nestable();
            $('.removeItem').click(function() {
                alert(1);
            });
        })

    </script>
</body>

</html>
