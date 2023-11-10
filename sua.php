<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="themmoisnapham">
        <table >
            <tr >
                <th style="background-color: brown; padding: 10px; width: 600px;" colspan="2" >Thêm Sữa Mới</th>
            </tr>
            <tr>
                <td class="table-left">Mã Sữa</td>
                <td class="table-right"><input type="text" style="padding: 5px;"></td>
            </tr>
            <tr>
                <td class="table-left">Tên Sữa</td>
                <td class="table-right"><input type="text" style="padding: 5px;"></td>
            </tr>
            <tr>
                <td class="table-left">Hãng Sữa</td>
                <td class="table-right">
                    <select>
                    <option value="Vinamilk">Vinamil</option>
                    <option value="ensua">ensure</option>
                    <option value="cô gái hà lan">Cô gái hà lan</option>
                    <option value="dansan">dansan</option>
                    <option value="Abbott">Abbott</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="table-left">Loại Sữa</td>
                <td class="table-right">
                    <select>
                    <option value="sữa chua">sữa chua</option>
                    <option value="sữa bột">Sữa Bột</option>
                    <option value="sữa tươi không đường">sữa tươi không đường</option>
                    <option value="sữa tươi có đường">sữa tươi có đường</option>
                   
                    </select></td>
            </tr>
            <tr>
                <td class="table-left">Đơn Giá</td>
                <td class="table-right"><input type="text" style="padding: 5px;">(VND)</td>
            </tr>
            <tr>
                <td class="table-left">Thành Phần Dinh Dưỡng</td>
                <td class="table-right"><textarea name="" id="" cols="30" rows="2"></textarea></td>
            </tr>
            <tr>
                <td class="table-left">Lợi ích</td>
                <td class="table-right"><textarea name="" id="" cols="30" rows="2"></textarea> </td>
            </tr>
            <tr>
                <td class="table-left">Hình Ảnh</td>
                <td class="table-right"><input type="text" style="padding: 5px;" readonly> <input type="submit" value="Browser..."></td>
            </tr>
            <tr>
                
                <th style="text-align: center; padding: 10px;" class="table-right" colspan="2"><input style="padding: 3px 10px;" type="button" value="thêm mới" ></th>
            </tr>
        </table>
    </div>
</body>
</html>