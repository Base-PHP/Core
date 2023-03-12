<?php

include __DIR__.'/app.php';
include __DIR__.'/../auth/class/2fa.php';
include __DIR__.'/../database/backup.php';
include __DIR__.'/../commands/bootstrap/console.php';
include __DIR__.'/../commands/class/command.php';
include __DIR__.'/../commands/class/process.php';
include __DIR__.'/../commands/commands/about.php';
include __DIR__.'/../commands/commands/api-install.php';
include __DIR__.'/../commands/commands/auth-install.php';
include __DIR__.'/../commands/commands/bills-table.php';
include __DIR__.'/../commands/commands/db-backup.php';
include __DIR__.'/../commands/commands/db-table.php';
include __DIR__.'/../commands/commands/db-wipe.php';
include __DIR__.'/../commands/commands/docs.php';
include __DIR__.'/../commands/commands/down.php';
include __DIR__.'/../commands/commands/env.php';
include __DIR__.'/../commands/commands/feature-purge.php';
include __DIR__.'/../commands/commands/feature-table.php';
include __DIR__.'/../commands/commands/inspire.php';
include __DIR__.'/../commands/commands/logs-clean.php';
include __DIR__.'/../commands/commands/logs-table.php';
include __DIR__.'/../commands/commands/make-command.php';
include __DIR__.'/../commands/commands/make-controller.php';
include __DIR__.'/../commands/commands/make-database.php';
include __DIR__.'/../commands/commands/make-excel.php';
include __DIR__.'/../commands/commands/make-feature.php';
include __DIR__.'/../commands/commands/make-job.php';
include __DIR__.'/../commands/commands/make-mail.php';
include __DIR__.'/../commands/commands/make-middleware.php';
include __DIR__.'/../commands/commands/make-migration.php';
include __DIR__.'/../commands/commands/make-model.php';
include __DIR__.'/../commands/commands/make-notification.php';
include __DIR__.'/../commands/commands/make-pdf.php';
include __DIR__.'/../commands/commands/make-resource.php';
include __DIR__.'/../commands/commands/make-rule.php';
include __DIR__.'/../commands/commands/make-test.php';
include __DIR__.'/../commands/commands/make-validation.php';
include __DIR__.'/../commands/commands/migrate.php';
include __DIR__.'/../commands/commands/migrate-refresh.php';
include __DIR__.'/../commands/commands/migrate-reset.php';
include __DIR__.'/../commands/commands/migrate-rollback.php';
include __DIR__.'/../commands/commands/model-show.php';
include __DIR__.'/../commands/commands/notifications-table.php';
include __DIR__.'/../commands/commands/permissions-create-permission.php';
include __DIR__.'/../commands/commands/permissions-create-role.php';
include __DIR__.'/../commands/commands/permissions-show.php';
include __DIR__.'/../commands/commands/permissions-table.php';
include __DIR__.'/../commands/commands/pint.php';
include __DIR__.'/../commands/commands/queue-clear.php';
include __DIR__.'/../commands/commands/queue-failed.php';
include __DIR__.'/../commands/commands/queue-flush.php';
include __DIR__.'/../commands/commands/queue-retry.php';
include __DIR__.'/../commands/commands/queue-table.php';
include __DIR__.'/../commands/commands/queue-work.php';
include __DIR__.'/../commands/commands/route-list.php';
include __DIR__.'/../commands/commands/server.php';
include __DIR__.'/../commands/commands/shell.php';
include __DIR__.'/../commands/commands/test.php';
include __DIR__.'/../commands/commands/tokens-table.php';
include __DIR__.'/../commands/commands/up.php';
include __DIR__.'/../commands/commands/vendor-publish.php';
include __DIR__.'/../commands/commands/view-clear.php';

include __DIR__.'/../crud/traits/crud.php';

include __DIR__.'/../export/excel.php';
include __DIR__.'/../export/pdf.php';

include __DIR__.'/../feature/class/feature.php';

include __DIR__.'/../http/redirect.php';
include __DIR__.'/../http/request.php';
include __DIR__.'/../http/resources.php';
include __DIR__.'/../http/response.php';

include __DIR__.'/../routing/router.php';
include __DIR__.'/../routing/route.php';
include __DIR__.'/../routing/controller.php';
include __DIR__.'/../routing/base-controller.php';

include __DIR__.'/../database/soft-deletes.php';
include __DIR__.'/../database/has-relationships.php';
include __DIR__.'/../database/base-model.php';
include __DIR__.'/../database/migration.php';

include __DIR__.'/../pagination/paginator.php';
include __DIR__.'/../pagination/length-aware-paginator.php';

include __DIR__.'/../database/builder.php';
include __DIR__.'/../view/view-service-provider.php';

include __DIR__.'/../database/db.php';
include __DIR__.'/../database/model.php';

include __DIR__.'/../jobs/class/job.php';

include __DIR__.'/../lang/lang.php';
include __DIR__.'/../logs/traits/logs.php';

include __DIR__.'/../permissions/middleware/can.php';
include __DIR__.'/../permissions/models/permission.php';
include __DIR__.'/../permissions/models/role.php';
include __DIR__.'/../permissions/traits/has-role.php';

include __DIR__.'/../notifications/traits/notifiable.php';
include __DIR__.'/../notifications/class/notification.php';

include __DIR__.'/../social/facebook.php';
include __DIR__.'/../social/google.php';

include __DIR__.'/../tokens/middleware/token-based-auth.php';
include __DIR__.'/../tokens/models/token.php';
include __DIR__.'/../tokens/traits/has-tokens.php';

include __DIR__.'/../validations/class/rule.php';
include __DIR__.'/../validations/class/validation.php';
include __DIR__.'/../validations/interfaces/rule.php';

include __DIR__.'/../test/test.php';

include __DIR__.'/../view/illuminate-component-tag-compiler.php';
include __DIR__.'/../view/component-tag-compiler.php';
include __DIR__.'/../view/compiler.php';
include __DIR__.'/../view/provider-view-service-provider.php';
include __DIR__.'/../view/provider-service-provider.php';
include __DIR__.'/../view/componentes.php';

include __DIR__.'/../support/config.php';
include __DIR__.'/../support/date.php';
include __DIR__.'/../support/debug.php';
include __DIR__.'/../support/helpers.php';
include __DIR__.'/../support/json.php';
include __DIR__.'/../support/mail.php';
include __DIR__.'/../support/qr.php';
include __DIR__.'/../support/storage.php';
include __DIR__.'/../support/session.php';
include __DIR__.'/../support/var.php';

include __DIR__.'/../view/view.php';
include __DIR__.'/../view/assets.php';

include __DIR__.'/../bill/models/bill-item.php';
include __DIR__.'/../bill/models/bill.php';
include __DIR__.'/../bill/models/customer.php';
include __DIR__.'/../bill/traits/billable.php';
