# ERD

```mermaid
erDiagram
    USER ||--o{ USER_ROLE : has
    ROLE ||--o{ USER_ROLE : assigns
    ROLE ||--o{ ROLE_PERMISSION : grants
    PERMISSION ||--o{ ROLE_PERMISSION : belongs
    CUSTOMER ||--o{ SALE : makes
    SALE ||--o{ SALE_ITEM : contains
    PRODUCT ||--o{ SALE_ITEM : sold_as
```

## Entities
- **User**: system users with credentials.
- **Role**: groups of permissions.
- **Permission**: granular actions.
- **Customer**: retail customers.
- **Product**: sellable items.
- **Sale**: transaction header.
- **SaleItem**: line items for each sale.
