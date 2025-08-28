const fs = require('fs');
const path = require('path');

// 讀取 PHP 檔案並轉換為 HTML
function convertPhpToHtml(filePath) {
    const content = fs.readFileSync(filePath, 'utf8');
    // 移除 PHP 標籤和簡單的 PHP 引入
    let htmlContent = content
        .replace(/<\?php.*?\?>/gs, '')
        .replace(/include\s*['"](.+?)['"];/g, (match, file) => {
            const includePath = path.join(path.dirname(filePath), file);
            if (fs.existsSync(includePath)) {
                return fs.readFileSync(includePath, 'utf8')
                    .replace(/<\?php.*?\?>/gs, '');
            }
            return '';
        });
    
    return htmlContent;
}

// 處理所有 PHP 檔案
const phpFiles = fs.readdirSync('.')
    .filter(file => file.endsWith('.php'));

if (!fs.existsSync('dist')) {
    fs.mkdirSync('dist');
}

phpFiles.forEach(file => {
    const htmlContent = convertPhpToHtml(file);
    const htmlFile = file.replace('.php', '.html');
    fs.writeFileSync(path.join('dist', htmlFile), htmlContent);
});
