<?php

namespace EightyNine\ExcelImport\Tables;

use EightyNine\ExcelImport\Concerns\HasExcelImportAction;
use Filament\Tables\Actions\Action;

class ExcelImportAction extends Action
{
    use HasExcelImportAction;
}
