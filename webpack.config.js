const path = require('path');

module.exports = {
    entry: './www/js/app.js',
    mode: (process.env.NODE_ENV === 'production') ? 'production' : 'development',
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ["style-loader", "css-loader"],
            },
        ],
    },
    devServer: {
        port: 3000
    },
    resolve: {
        extensions: ['*', '.js', '.jsx']
    },
    output: {
        filename: 'bundle.js',
        path: path.join(__dirname, 'www', 'assets'),
    }
};
