from flask import Flask, render_template, request
import pymongo
import logging

app = Flask(__name__)

client = pymongo.MongoClient("mongodb+srv://krisnanto:krisnanto@cluster0-stbqi.mongodb.net/quote?retryWrites=true&w=majority")
db = client.quote

@app.route('/')
def hello_world():
    data = db.quotes.find()
    return render_template('form.html', data=data)


@app.route('/quotes', methods = ['POST'])
def create_quote():
    autor = str(request.form.get('autor'))
    quote = str(request.form.get('quote'))
    save = db.quotes.insert_one({"autor":autor, "quote": quote})
    if save:
        message = "Success"
    else:
        message = "Failed"

    data = db.quotes.find()
    return render_template('form.html', data=data, message=message)

        