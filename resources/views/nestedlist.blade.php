<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link href="{{ asset('css/nestable.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .dd-handle {}

        .deleteItem:hover {
            color: red;
            z-index: 2;
        }

        .dd-handle:hover .deleteItem {
            display: inline;
        }

        .itemIcon {
            font-size: 20px;
        }

    </style>
</head>

<body>

    <!--rightside bar -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="ti-list"></i> Nestable List 1
                    </h3>
                </div>
                <div class="card-body ">
                    <a href="javascript:void(0)" onclick="addRow()">row</a>
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            @foreach ($data as $task)
                            @if ($task['order'] == 1)
                            <li class="dd-item" data-id="{{ $task['id'] }}">
                                <div class="dd-handle">{{ $task['name'] }}
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
                                @foreach ($data as $taskLvl2)
                                @if ($taskLvl2['parentId'] == $task['id'])
                                <ol class="dd-list">
                                    @foreach ($data as $taskLvl2)
                                    @if ($taskLvl2['parentId'] == $task['id'])
                                    <li class="dd-item" data-id="{{ $taskLvl2['id'] }}">
                                        <div class="dd-handle">{{ $taskLvl2['name'] }}
                                            <a title="Delete"
                                                class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                                href="javascript:void(0)">
                                                <i class="itemIcon fa fa-trash-o"></i>
                                            </a>
                                            <a title="Edit"
                                                class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                                href="javascript:void(0)">
                                                <i class='itemIcon fa fa-edit'></i>
                                            </a>
                                            <a title="Add"
                                                class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                                href="javascript:void(0)">
                                                <i class='itemIcon fa fa-plus'></i>
                                            </a>
                                        </div>
                                        @foreach ($data as $taskLvl3)
                                        @if ($taskLvl3['parentId'] == $taskLvl2['id'])
                                        <ol class="dd-list">
                                            @foreach ($data as $taskLvl3)
                                            @if ($taskLvl3['parentId'] == $taskLvl2['id'])
                                            <li class="dd-item"
                                                data-id="{{ $taskLvl3['id'] }}">
                                                <div class="dd-handle">
                                                    {{ $taskLvl3['name'] }}
                                                    <a title="Delete"
                                                        class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                                        href="javascript:void(0)">
                                                        <i
                                                            class="itemIcon fa fa-trash-o"></i>
                                                    </a>
                                                    <a title="Edit"
                                                        class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                                        href="javascript:void(0)">
                                                        <i
                                                            class='itemIcon fa fa-edit'></i>
                                                    </a>
                                                    <a title="Add"
                                                        class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                                        href="javascript:void(0)">
                                                        <i
                                                            class='itemIcon fa fa-plus'></i>
                                                    </a>
                                                </div>
                                                @foreach ($data as $taskLvl4)
                                                @if ($taskLvl4['parentId'] == $taskLvl3['id'])
                                                <ol class="dd-list">
                                                    @foreach ($data as $taskLvl4)
                                                    @if ($taskLvl4['parentId'] == $taskLvl3['id'])
                                                    <li class="dd-item"
                                                        data-id="{{ $taskLvl4['id'] }}">
                                                        <div
                                                            class="dd-handle">
                                                            {{ $taskLvl4['name'] }}
                                                            <a title="Delete"
                                                                class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                                                href="javascript:void(0)">
                                                                <i
                                                                    class="itemIcon fa fa-trash-o"></i>
                                                            </a>
                                                            <a title="Edit"
                                                                class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                                                href="javascript:void(0)">
                                                                <i
                                                                    class='itemIcon fa fa-edit'></i>
                                                            </a>
                                                            <a title="Add"
                                                                class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                                                href="javascript:void(0)">
                                                                <i
                                                                    class='itemIcon fa fa-plus'></i>
                                                            </a>
                                                        </div>
                                                        @foreach ($data as $taskLvl5)
                                                        @if ($taskLvl5['parentId'] == $taskLvl4['id'])
                                                        <ol class="dd-list">
                                                            @foreach ($data as $taskLvl5)
                                                            @if ($taskLvl5['parentId'] == $taskLvl4['id'])
                                                            <li class="dd-item"
                                                                data-id="{{ $taskLvl5['id'] }}">
                                                                <div
                                                                    class="dd-handle">
                                                                    {{ $taskLvl5['name'] }}
                                                                    <a title="Delete"
                                                                        class="btnAction btnDelete pull-right pr-2 h-100 d-none"
                                                                        href="javascript:void(0)">
                                                                        <i
                                                                            class="itemIcon fa fa-trash-o"></i>
                                                                    </a>
                                                                    <a title="Edit"
                                                                        class="btnAction btnEdit pull-right pr-2 h-100 d-none"
                                                                        href="javascript:void(0)">
                                                                        <i
                                                                            class='itemIcon fa fa-edit'></i>
                                                                    </a>
                                                                    <a title="Add"
                                                                        class="btnAction btnAdd pull-right pr-2 h-100 d-none"
                                                                        href="javascript:void(0)">
                                                                        <i
                                                                            class='itemIcon fa fa-plus'></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            @endif
                                                            @endforeach
                                                        </ol>
                                                        @break
                                                        @endif
                                                        @endforeach
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ol>
                                                @break
                                                @endif
                                                @endforeach
                                            </li>
                                            @endif
                                            @endforeach
                                        </ol>
                                        @break
                                        @endif
                                        @endforeach
                                    </li>
                                    @endif
                                    @endforeach
                                </ol>
                                @break
                                @endif
                                @endforeach
                            </li>
                            @endif
                            @endforeach
                        </ol>
                    </div>
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

            // jquery nestablelist
            $("#nestable_list_1").nestable();

            // Show action buttons when list is hovered
            $(".dd-handle").hover(function() {
                $(this).find(".btnAction").removeClass('d-none');
            });

            // Hide action buttons when mouse leave list
            $(".dd-handle").on("mouseleave", function() {
                $(this).find(".btnAction").addClass('d-none');
            });

            // button delete hovered
            $(".btnDelete").hover(function() {
                $(this).closest("div").addClass('border border-danger');
                $(this).closest("div").next().find("li div").addClass('border border-danger');
            });

            // button delete mouse leave
            $(".btnDelete").on("mouseleave", function() {
                $(this).closest("div").removeClass('border border-danger');
                $(this).closest("div").next().find("li div").removeClass('border border-danger');
            });
        })

        function addRow() {
            cancelInputAddItem();
            $("#nestable_list_1 ol").first().append(`
                <li class="addItemAppend dd-item" data-id="4">
                    <form>
                        <div class="input-group">
                            <input id="inputAddItem" type="text" class="form-control" aria-label="Add Item" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" onclick="saveInputAddItem()" class="btn btn-outline-primary" type="button">Save</button>
                                <button onclick="cancelInputAddItemBase()" class="btn btn-outline-danger" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </li>
            `);
            document.getElementById("inputAddItem").focus();
        };

        // function deleteItem() {
        //     alert("Delete Item");
        //     console.log($(this).closest("li").append(`<h1>test</h1>`));
        //     $(this).closest("li").remove();
        // }
        $(".btnDelete").on("click", function(e) {
            var taskId = $(this).closest("li").data("id");
            $.ajax({
                url: "/task/" + taskId,
                type: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log("success");
                    console.log(response);
                },
                error: function(response) {
                    console.log("error");
                    console.log(response);
                }
            })
            $(this).closest("li").remove();
        })

        // button add new item
        $(".btnAdd").on("click", function(e) {

            var _order = $(this).parents("ol").length;
            if (_order < 5) {
                cancelInputAddItem();

                $(this).closest('li').append(`
                    <ol class="dd-list">
                        <li class="addItemAppend dd-item">
                            <form>
                                <div class="input-group">
                                    <input id="inputAddItem" type="text" class="form-control" aria-label="Add Item" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="submit" onclick="saveInputAddItem()" class="btn btn-outline-primary" type="button">Save</button>
                                        <button onclick="cancelInputAddItem()" class="btn btn-outline-danger" type="button">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ol>
                `);
                document.getElementById("inputAddItem").focus();
            }
        })

        // button edit Item
        $(".btnEdit").on("click", function(e) {
            cancelInputEditItem();
            $(this).closest('li').prepend(`
            <form>
                <div class="editItemAppend input-group">
                    <input id="inputEditItem" type="text" class="form-control" aria-label="Edit Item" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" onclick="saveInputEditItem()" class="btn btn-outline-primary" type="button">Update</button>
                        <button onclick="cancelInputEditItem()" class="btn btn-outline-danger" type="button">Cancel</button>
                    </div>
                </div>
            </form>
            `);
            $(this).closest('div').addClass('d-none hidden_edit');
            $("#inputEditItem").val($(this).closest('div').text().trim());
            document.getElementById("inputEditItem").focus();
        })

        //Prevent list to drag when action buttons is clicked
        $(".dd-handle .btnAction").on('mousedown', function(e) {
            event.preventDefault();
            return false;
        })

        // Save Update
        function saveInputEditItem() {
            var taskId = $("#inputEditItem").closest("li").data("id");
            var _name = $("#inputEditItem").val();
            var _order = $(".editItemAppend").parents("ol").length;
            console.log($(".editItemAppend").parents("ol li.dd-item"));
            var _parentId = (_order > 1) ? $(".editItemAppend").parents("ol li.dd-item")[1].dataset.id : 0;
            console.log(taskId, _name, _order, _parentId);
            var _rootId = (_order == 1) ? _parentId : $(".editItemAppend").parents("ol li.dd-item")[_order - 1].dataset
                .id;
            console.log(taskId, _name, _order, _parentId, _rootId);

            $.ajax({
                url: "/task/" + taskId,
                type: "PUT",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: _name,
                    order: _order,
                    parentId: _parentId,
                    rootId: _rootId
                },
                success: function(response) {
                    console.log("success");
                    console.log(response);
                    // location.reload();
                },
                error: function(response) {
                    console.log("error");
                    console.log(response);
                }
            });
        }

        // Cancel Update
        function cancelInputEditItem() {
            $(".hidden_edit").removeClass('d-none');
            $(".hidden_edit").removeClass('hidden_edit');
            $(".editItemAppend").remove();
        }

        // Save Add
        function saveInputAddItem() {
            var _name = $("#inputAddItem").val();
            var _order = $(".addItemAppend").parents("ol").length;
            var _parentId = ($(".addItemAppend").parent().parent().data("id")) ? $(".addItemAppend").parent().parent()
                .data("id") : 0;
            console.log(_name, _order, _parentId);
            var _rootId = (_parentId) ? $(".addItemAppend").parents("ol li.dd-item")[_order - 2].dataset.id : 0;
            console.log(_name, _order, _parentId, _rootId);

            $.ajax({
                url: "/task",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: _name,
                    order: _order,
                    parentId: _parentId,
                    rootId: _rootId
                },
                success: function(response) {
                    console.log("success");
                    console.log(response);
                    // location.reload();
                },
                error: function(response) {
                    console.log("error");
                    console.log(response);
                }
            });
        }

        // Cancel Add
        function cancelInputAddItem() {
            $(".addItemAppend").closest('ol').remove();
        }

        // Cancel Add Base
        function cancelInputAddItemBase() {
            $(".addItemAppend").remove();
        }

        // $(".dd-handle .btnEdit").on('mousedown', function(e){
        //     event.preventDefault(); return false; 
        //     alert("edit");
        // })

        // $(".dd-handle .btnAdd").on('mousedown', function(e){
        //     event.preventDefault(); return false; 
        //     alert("add");
        // })

    </script>
</body>

</html>
