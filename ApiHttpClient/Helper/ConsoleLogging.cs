using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ApiHttpClient.Helper
{
    internal class ConsoleLogging : MessageProcessingHandler
    {
        protected override HttpRequestMessage ProcessRequest(HttpRequestMessage request, CancellationToken cancellationToken)
        {
            Console.WriteLine("{0}\t{1}\t{2}", request.RequestUri, request.Method.ToString(), request.Content);
            return request;
        }

        protected override HttpResponseMessage ProcessResponse(HttpResponseMessage response, CancellationToken cancellationToken)
        {
            Console.WriteLine("{0}\t{1}\t{2}", response.RequestMessage, response.StatusCode, response.Headers.Date);
            return response;
        }
    }
}
