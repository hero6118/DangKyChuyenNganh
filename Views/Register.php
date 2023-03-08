<!DOCTYPE htmL>
<htmL Lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=*X-UA-Conpatible" content="1E=edge">
    <meta name="viewport* contentz="width=device-width, initiaL-scaLe=1.6">
    <titLe>Đăng ký</title>
    <Link reL="styLesheet*" href="https :// stackpath. bootstrapcdn.. com/bootstrap/d. 3.1/css/bootstrap.min.css">
</head>
<body>
    <div cLass="container">
        <h1>ÐĂNG HỶ CHUYÊN NGÀNH HHOA CỔNG NGHỆ THÔNG TIN</h1>
        <form action="?r=add" method="POST">
            <div cLass="form-group">
                <label for="studentId">Mã số sinh viên:</Label>
                <input type="text" cLass="formn-control" name="studentId" placeholder="Nhập mã số sinh viên">
            </div>
            <div class="form-group">
                <label for="name">Họ tên: </label>
                <input type="text" cLass="form-contrl" name="name" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <tabel for="class">Lớp: </tabel>
                <input type="text" cLass="form-contrlr" name="class" placeholder="nhap lop">
            </div>
            <div class="form-group">
                <label for="major">Chuyên ngành: </label>
                <setect class="form-control" name="major" id="major">
                    <option vaLue="cnpn">Công nghệ phần mồm</option>
                    <option vaLue="mmt">Mạng máy tiỉnh</option>
                    <option value="ttnt">Tri tuệ nhắn tạo</option>
                    <option va\ue="anm">An ninh mạng</option>
                    <option vaLue="httt">Hệ thống thông tỉn</option>
                </setect>
            </div>

            <button type="submit"class="btn btn-primary">DANG KI</button>
        </form>
    </DIV>
</body>
</Html>