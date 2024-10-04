<a href='https://api.whatsapp.com/send?phone=55".$fone. target='_blank'> <button title='Whatsapp' class='btn btn-sm btn-success'><i class='fa fa-whatsapp'></i></button></a>
<button title='Editar Cliente' class='btn btn-sm btn-warning' onclick='edit( . base64_encode($nome))'><i class='fa fa-edit'></i></button>
<button title='Detalhes do Cliente' onclick='showDetails( . base64_encode($nome) . class='btn btn-sm btn-primary'><i class='fa fa-plus'></i></button>
<button title='Cadastrar Agendamento' onclick='showAddSchedule( . ($totalagendamentos + 1) . "  .$nome. "  .$matricula. class='btn btn-sm btn-info'><i class='fa fa-calendar'></i></button>
<button title='Agendamentos' onclick='showSchedules( . base64_encode($nome) . "  . ($totalagendamentos + 1) . "  .$nome. "  .$matricula. "  .$fone. class='btn btn-sm btn-secondary'><i class='fa fa-commenting-o'></i></button>
<button title='Atualizar status matrícula' onclick='toggleRegistrationStatus($matricula, $status, $nome)' class='btn btn-sm btn-success'> <i class='fa fa-refresh'></i></button>



<button title='Apagar cliente' onclick='delete_cliente( ase64_encode($nome), $nome_cliente)' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>

<div class='dropdown'>
    <button class='btn btn-sm btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton'
        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Menu
    </button>
    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
        <div class='m-2' style='display: flex; gap: .5em'>{$btn}</div>
    </div>
</div>