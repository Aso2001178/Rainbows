# データベース設計図
 
## d_purchase
 
|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|order_id|bigint(20)|○|○||
|custom_code|varchar(50)||○|○|
|purday|date||○||
|total_price|int(11)||○||
 
## d_purchase_detail
 
|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|detail_id|bigint(20)|○|○||
|order_id|bigint(20) |○|○|○|
|item_code|int(11)||○||
|price|int(11)||○||
|num|int(11)||○||
 
## m_customers
 
|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|custom_code|varchar(50)|○|○||
|pass|varchar(50)||○||
|name|varchar(20)||○||
|address|varchar(100)||○||
|mail|varchar(100)||○||
|del_flag|int(1)||||
|registerday|date||○||
 
## m_category
 
|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|category_id|int(11)|○|○||
|name|varchar(20)||○||
|registerday|date||○||
 
## m_items
 
|項目名|型|PK|NN|FK|
|-----|--|--|--|--|
|item_code|int(11)|○|○||
|item_name|varchar(50)||○||
|price|int(11)||○||
|category_id|int(11)||○|○|
|image|varchar(200)||○||
|detail|varchar(500)||||
|del_flag|int(11)||||
|registerday|date||○||
