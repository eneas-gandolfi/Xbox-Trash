const randomBytes = require('crypto').randomBytes;
const AWS = require('aws-sdk');
const ddb = new AWS.DynamoDB.DocumentClient();

exports.handler = (event, context, callback) => {
    console.log(event.nome);
    /*
    const requestBody = JSON.parse(event);
    console.log(requestBody.nome);
    const nome = requestBody.nome;
    const email = requestBody.email;
    const resenha = requestBody.resenha;
    */
    const nome = event.nome;
    const email = event.email;
    const resenha = event.resenha;
    const codigo = toUrlString(randomBytes(16));
    console.log(codigo);

    gravarResenha(codigo, nome, email, resenha).then(() => {
        callback(null, {
            statusCode: 201,
            body: JSON.stringify({
                codigo: codigo,
                Nome: nome,
                Email: email,
                Resenha: resenha,
            }),
            headers: {
                'Access-Control-Allow-Origin': '*',
            },
        });
    }).catch((err) => {
        console.error(err);
        errorResponse(err.message, context.awsRequestId, callback);
    });
};

function gravarResenha(codigo, nome, email, resenha) {
    return ddb.put({
        TableName: 'Resenhas',
        Item: {
            codigo: codigo,
            Nome: nome,
            Email: email,
            Resenha: resenha,
        },
    }).promise();
}

function toUrlString(buffer) {
    return buffer.toString('base64')
        .replace(/\+/g, '-')
        .replace(/\//g, '_')
        .replace(/=/g, '');
}

function errorResponse(errorMessage, awsRequestId, callback) {
  callback(null, {
    statusCode: 500,
    body: JSON.stringify({
      Error: errorMessage,
      Reference: awsRequestId,
    }),
    headers: {
      'Access-Control-Allow-Origin': '*',
    },
  });
}