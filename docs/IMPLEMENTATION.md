# Implementation Checklist

## Backend
- [ ] Complete models for inventory, purchasing, sales, loyalty, cash management.
- [ ] Implement discount precedence and supervisor override logic.
- [ ] Offline-first sync with conflict resolution.
- [ ] Audit logging and RBAC middleware.

## Frontend
- [ ] PWA setup with offline cache and WebUSB printing.
- [ ] Register interface with barcode scanning and mixed payments.
- [ ] Inventory management screens with stock transfers.

## Testing
- [ ] Unit tests for pricing, discounts, loyalty points.
- [ ] 20+ Playwright E2E scenarios.
- [ ] Seed data and factories for all modules.

## DevOps
- [ ] Docker Compose for app, db, redis.
- [ ] Structured logs, metrics, error tracking integration.
- [ ] CI pipeline for tests and linting.
