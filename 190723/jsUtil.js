
// 字首 [A-Z]
// 第二個字 [1|2]
// 除了字首都是數字 
// 字母查表替換成對應數字
// n1*1 +n2*9 +n3*8...+n11*1

// 手機
let tel = /^09\d{2}\-\d{6}$/g;

function checkTWID(id) {
    let ret = false;

    // g = 完整搜尋
    // i = 不分大小寫
    const regex = /^[A-Z][12]\d{8}$/g;

    const letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

    // if (parseInt(id[0]) || id[0] == 0) {
    // }

    if (regex.exec(id)) {
        let c = id[0],
            // 轉換字首對應的數字
            n12 = letters.indexOf(c) + 10,
            n1 = parseInt(n12 / 10),
            n2 = n12 % 10,
            // 第二個字元後轉為字元陣列
            ns = id.substring(1, id.length).split(''),
            sum = n1 + n2 * 9;

        for (let i = 0; i < ns.length - 1; i++) {
            sum += ns[i] * (8 - i);
        }

        sum += parseInt(ns[ns.length - 1]);

        ret = sum % 10 === 0;
    }

    return ret;
}

// 統一編號
function checkTaxTWID(id) {
    let ret = false;
    const regex = /^\d{8}$/g;

    if (regex.exec(id)) {

    }
}