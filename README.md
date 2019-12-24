PHP 雲端資料庫連結：mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/test?retryWrites=true&w=majority


python：mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/test?retryWrites=true&w=majority



import pymongo

my_client = pymongo.MongoClient("mongodb+srv://maomao:maomao123@animal-axwfm.gcp.mongodb.net/test?retryWrites=true&w=majority")


my_database = my_client.test

my_collection = my_database.neko
my_collection.insert_one({
    "name": "apple",
    "calories": 266,
    "fats": {
        "saturated": 4.5,
        "trans": 0.2
    },
    "protein": 11
})
