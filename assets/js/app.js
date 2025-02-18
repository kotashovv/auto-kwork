document.addEventListener('DOMContentLoaded', () => {
    function EncodeText(text) {
        let result = '';
        let count = 1;

        for (i = 0; i < text.length; i++) {
            if (text[i] === text[i + 1]) {
                count++;
            } else {
                if (count > 1) {
                    result += count;
                }
                result += item[i];
                count = 1;
            }
        }

        return result;
    }
})