class UI {
	static alerta(etiqueta, classN) {
		const el = document.querySelector(etiqueta);
		el.className = `form-control text-uppercase ${classN}`;
	}

	static error(id) {
		const el = document.getElementById(id);
		el.style.opacity = 1;
	}

	static good(id) {
		const el = document.getElementById(id);
		el.style.opacity = 0;
	}
}

function validar() {
	const nombre = document.getElementById('id_nombre').value;
	const genero = document.getElementById('id_genero').value;
	const fecha = document.getElementById('id_date').value;
	const numero = document.getElementById('id_phoneNumber').value;
	const email = document.getElementById('id_email').value;
	const servicio = document.getElementById('id_servicio').value;
	const estado = document.getElementById('id_estado').value;
	const foto = document.getElementById('id_foto').value;
	const ident = document.getElementById('id_identificacion').value;
	const comprobante = document.getElementById('id_comprobante').value;

	const r_nombre = validarTexto(nombre);
	const r_numero = validarNumero(numero);
	const r_email = validarEmail(email);
	const r_genero = validarSelect(genero, 'id_genero', 'error_genero');
	const r_servicio = validarSelect(servicio, 'id_servicio', 'error_servicio');
	const r_estado = validarSelect(estado, 'id_estado', 'error_estado');
	const r_foto = validarFile(foto, 'id_foto', 'error_foto');
	const r_ident = validarFile(ident, 'id_identificacion', 'error_identificacion');
	const r_comprobante = validarFile(comprobante, 'id_comprobante', 'error_comprobante');
	const r_fecha = validarFecha(fecha);
	console.log(r_fecha);

	if (
		r_nombre == -1 ||
		r_numero == -1 ||
		r_email == -1 ||
		r_fecha == -1 ||
		r_genero == -1 ||
		r_servicio == -1 ||
		r_estado == -1 ||
		r_foto == -1 ||
		r_ident == -1 ||
		r_comprobante == -1
	) {
		return false;
	}
}

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	typeFile: /\.(jpg|png)$/i,
};

const { nombre, correo, typeFile } = expresiones;

const validarTexto = (el) => {
	if (el === '' || el.length < 10 || !nombre.test(el)) {
		UI.alerta('#id_nombre', 'is-invalid');
		UI.error('error_nombre');
		return -1;
	} else {
		UI.alerta('#id_nombre', 'is-valid');
		UI.good('error_nombre');
	}
};

const validarSelect = (el, idx, idStyle) => {
	if (el == 0) {
		UI.alerta(`#${idx}`, 'is-invalid');
		UI.error(`${idStyle}`);
		return -1;
	} else {
		UI.alerta(`#${idx}`, 'is-valid');
		UI.good(`${idStyle}`);
	}
};

const validarNumero = (numero) => {
	if (!numero == '') {
		if (numero.length != 10 || isNaN(numero)) {
			UI.alerta('#id_phoneNumber', 'is-invalid');
			UI.error('error_numero');
			return -1;
		} else {
			UI.alerta('#id_phoneNumber', 'is-valid');
			UI.good('error_numero');
		}
	}
};

const validarEmail = (email) => {
	if (email === '' || !correo.test(email)) {
		UI.alerta('#id_email', 'is-invalid');
		UI.error('error_email');
		return -1;
	} else {
		UI.alerta('#id_email', 'is-valid');
		UI.good('error_email');
	}
};

const fileSelect = (obj, idx, idStyle) => {
	let file = obj.files[0];
	if (!typeFile.test(file.name)) {
		alert('El archivo seleccionado no es una imagen.');
		UI.alerta(`#${idx}`, 'is-invalid');
		UI.error(`${idStyle}`);
		let id = document.getElementById(idx);
		id.value = '';
	} else {
		UI.alerta(`#${idx}`, 'is-valid');
		UI.good(`${idStyle}`);
	}
};

const validarFile = (el, idx, idStyle) => {
	if (el == '') {
		UI.alerta(`#${idx}`, 'is-invalid');
		UI.error(`${idStyle}`);
		return -1;
	}
};

const validarFecha = (fecha) => {
	let f = new Date();
	let mes = (f.getMonth() + 1).toString();
	let dia = f.getDate().toString();

	if (mes.length == 1) {
		mes = `0${mes}`;
		console.log(mes);
	}
	if (dia.length == 1) {
		dia = `0${dia}`;
		console.log(dia);
	}
	const today = `${f.getFullYear()}-${mes}-${dia}`;
	const min_date = '';
	const min_edad = '';

	if (fecha > today) {
		UI.alerta('#id_date', 'is-invalid');
		UI.error('error_fecha');
		console.log('fecha mayor a la actual');
		return -1;
	} else if (fecha < '1940-12-12') {
		UI.alerta('#id_date', 'is-invalid');
		UI.error('error_fecha');
		console.log('fecha menor a 100 años');
		return -1;
	} else {
		UI.alerta('#id_date', 'is-valid');
		UI.good('error_fecha');
	}
};
