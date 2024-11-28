using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ApiHttpClient.Helper
{
    internal class FileLogging : DelegatingHandler
    {
        private readonly string logfile;
        public FileLogging(string logfile)
        {
            this.logfile = logfile;
        }

        protected override async Task<HttpResponseMessage> SendAsync(HttpRequestMessage request, CancellationToken cancellationToken)
        {
            using (FileStream log = new FileStream(logfile, FileMode.Create | FileMode.Append))
            {
                using (StreamWriter writer = new StreamWriter(log))
                {
                    try
                    {
                        var response = await base.SendAsync(request, cancellationToken);
                        if (!response.IsSuccessStatusCode)
                        {
                            try
                            {
                                writer.WriteLine(string.Format("{0}\tError: {1}\t{2}", response.Headers.Date, request.RequestUri, (int)response.StatusCode));
                            }
                            catch (Exception ex)
                            {
                                writer.WriteLine(string.Format("{0}\t{1}", DateTime.Now, ex.Message));
                            }
                        }
                        return response;
                    }
                    catch (Exception ex)
                    {
                        do
                        {
                            writer.WriteLine(string.Format("{0}\tLogError: {1}", DateTime.Now, ex.Message));
                            ex = ex.InnerException;
                        } while (ex != null);
                        return await base.SendAsync(request, cancellationToken);
                    }
                }
            }
        }
    }
}
