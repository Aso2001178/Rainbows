```uml
@startuml
 
skinparam class {
    '図の背景
    BackgroundColor Snow
    '図の枠
    BorderColor Black
    'リレーションの色
    ArrowColor Black
}
 
!define MASTER_MARK_COLOR yellow 
!define TRANSACTION_MARK_COLOR yellowgreen
 
package "ECサイト" as target_system {
    /'
      マスターテーブルを M、トランザクションを T などで表記
      １文字なら "主" とか "従" まど日本語でも記載可能
     '/
 
    entity "顧客テーブル" as customer <m_customers> <<M,MASTER_MARK_COLOR>> {
        + custom_code [PK]
        --
        pass
        name
        address
        mail
        del_flag
        registerday
    }

    entity "購入テーブル" as order <d_purchase> <<T,TRANSACTION_MARK_COLOR>> {
        + order_id [PK]
        --
        # custom_code
        purday
        total_price
    }

    entity "購入テーブル詳細" as order_detail  <d_purchase_detail> <<T,TRANSACTION_MARK_COLOR>> {
        + detail_id[PK]
        + order_id[PK][FK]
        --
        # item_code
        price
        num
    }

    entity "商品テーブル" as items <m_items> <<M,MASTER_MARK_COLOR>> {
        + item_code [PK]
        --
        item_name
        price
        # category_id [FK]
        image
        detail
        del_flag
        registerdate
    }

    entity "カテゴリテーブル" as category <m_category> <<M,MASTER_MARK_COLOR>> {
        + category_id [PK]
        --
        name
        registerday
    }
  }

  customer       |o-ri-o{     order
order          ||-ri-|{     order_detail
order_detail    }-do-||     items
items          }o-le-||     category
 

@enduml
```
