from domain import *
from domain import DataTable
print(DataTable.__doc__)

print(Column.__init__.__doc__)

table_empreedimento = DataTable("Empreendimento")
col_id = table_empreedimento.add_column('IdEmpreendimento','bigint')
col_aditivo = table_empreedimento.add_column('IdAditivo','bigint')
col_alerta = table_empreedimento.add_column('IdAlerta', 'bigint')
table_aditivo = DataTable("Aditivo")
col_id = table_aditivo.add_column('IdAditivo', 'bigint')
col_emp_id = table_empreedimento.add_column('IdEmpreendimento', 'bigint')
table_empreedimento.add_references("IdAditivo", table_aditivo, col_aditivo)
table_aditivo.add_referenced("IdEmpreendimento", table_empreedimento, col_emp_id)