erDiagram
    PRODUCT ||--o{ SALE_ITEM : contains
    SALE ||--o{ SALE_ITEM : has
    CUSTOMER ||--o{ SALE : makes
    USER ||--o{ SALE : processes
    ROLE ||--o{ USER : assigns
    PERMISSION ||--o{ ROLE : grants
    WAREHOUSE ||--o{ STOCK : holds
    PRODUCT ||--o{ STOCK : stored_in
