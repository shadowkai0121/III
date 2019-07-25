
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

// 不重複取算亂數
function createAnswer(n = 3) {

    let ret = '',
        nums = [],
        rnd = 0;

    for (let i = 0; i < 10; i++) {
        nums[i] = i;
    }

    for (let i = nums.length - 1; i > 0; i--) {
        rnd = parseInt(Math.random() * (i + 1));
        [nums[i], nums[rnd]] = [nums[rnd], nums[i]];
    }

    for (let i = 0; i < n; i++) {
        ret += nums[i];
    }

    return ret;
}

function checkAB(ans, gus) {
    let a = 0,
        b = 0;

    for (let i = 0; i < gus.length; i++) {
        if (ans[i] === gus[i]) {
            a++;
        }
        else if (ans.indexOf(gus[i]) !== -1) {
            b++;
        }
    }

    // return '' + a + 'A' + b + 'B';
    return `${a} A ${b} B`;

}