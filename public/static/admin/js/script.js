function get_alias(title) {
    str = title;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/ọ/gi, 'o');
    str = str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g, "-");
    str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g, "");//cắt bỏ ký tự - ở đầu và cuối chuỗi
    str = str.replace(/–-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/-–/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/--/g, "-"); //thay thế 2- thành 1-
    return str;

    // str = str.replace(/^\s+|\s+$/g, ''); // trim
    // str = str.toLowerCase();
    //
    // // remove accents, swap ñ for n, etc
    // var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    // var to   = "aaaaeeeeiiiioooouuuunc------";
    // for (var i=0, l=from.length ; i<l ; i++) {
    //     str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    // }
    //
    // str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
    //     .replace(/\s+/g, '-') // collapse whitespace and replace by -
    //     .replace(/-+/g, '-'); // collapse dashes
    //
    // return str;
    //
    //
    // //Đổi chữ hoa thành chữ thường
    // var slug = title.toLowerCase();
    //
    // //Đổi ký tự có dấu thành không dấu
    // slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    // slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    // slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    // slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    // slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    // slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    // slug = slug.replace(/đ/gi, 'd');
    // slug = slug.replace(/ọ/gi, 'o');
    // //Xóa các ký tự đặt biệt
    // slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    // //Đổi khoảng trắng thành ký tự gạch ngang
    // slug = slug.replace(/ /gi, "-");
    // //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    // //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    // slug = slug.replace(/\-\-\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-\-/gi, '-');
    // slug = slug.replace(/\-\-/gi, '-');
    // //Xóa các ký tự gạch ngang ở đầu và cuối
    // slug = '@' + slug + '@';
    // slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    // //In slug ra textbox có id “slug”
    //
    // return slug;
}