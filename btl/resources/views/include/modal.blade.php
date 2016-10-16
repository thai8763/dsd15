<!-- Tạo thư mục mới -->
<div id="myNewFolder" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form action="{{ url('/course/'.$courseID.'/my-document/add-folder/'. $parentFolderID) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times; </button>
                <h4 class="modal-title"> Thư mục mới </h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" name="folderName" placeholder="Nhập tên thư mục">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info"> Xác nhận </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"> Hủy </button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Tải File -->
<div id="myNewFile" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form action="{{ url('/course/'.$courseID.'/my-document/upload-file/'. $parentFolderID) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Tải tệp lên </h4>
            </div>
            <div class="modal-body">
                <input type="file" name="file" id="fileToUpload">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info"> Xác nhận </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"> Hủy </button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Xem File -->
<div id="myShowFile" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> </h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Đóng </button>
            </div>
        </div>
    </div>
</div>

<!-- Xem binh luan -->
<div id="myComment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Chú thích </h4>
            </div>
            <div class="modal-body">
                <iframe id="url" src=""> </iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info"> Xác nhận </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"> Hủy </button>
            </div>
        </div>
    </div>
</div>

<!-- Chia sẻ -->
<div id="myShare" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form action="" method="post">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Chia sẻ </h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info"> Xác nhận </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"> Hủy </button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Xóa file -->
<div id="myDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form action="{{ url('/course/'.$courseID.'/my-document/delete-folder/'. $folderID) }}" method="post">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Xóa? </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info"> Xác nhận </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"> Hủy </button>
            </div>
        </div>
        </form>
    </div>
</div>

<script>
    function showFile(td) {
        var fileName = $(td).attr("id");
        $(".modal-title").html(fileName);
        $("#url").attr("src").html(fileName);
    }
</script>